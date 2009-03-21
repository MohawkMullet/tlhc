/**
 * jQuery jqAlbumParser Plugin
 * Examples and documentation at: http://benjaminsterling.com/2007/09/13/jquery-jqalbumparser-plugin-parses-out-flickr-picasa-clientside/
 *
 * @author: Benjamin Sterling
 * @version: 1.0
 * @copyright (c) 2007 Benjamin Sterling, KenzoMedia
 *
 * Dual licensed under the MIT and GPL licenses:
 *   http://www.opensource.org/licenses/mit-license.php
 *   http://www.gnu.org/licenses/gpl.html
 *   
 * @requires jQuery v1.2.1 or later
 *
 * @name jqAlbumParser
 * @example $('a.jqAlbumParser').jqAlbumParser();
 * 
 * @param webAlbum
 * 			This needs to be set to either picasa or flickr, or set an option in the class attr
 * 			to wa:flickr or wa:picasa
 * 
 * @param wrapper
 * 			The wrapper param by default will have ul > li as the 
 * 			wrapper and will look like below when executed.  But you 
 * 			are not limited that, you can use div > p or any other
 * 			semantic(?) structure
 *
 * @example wrapper : "ul > li" or wrapper :"ol>li" etc...
 * 
 * @output <ul><li><img src="pathtoimage"/></li>...</ul>
 * 
 * @param parentAttr
 * 			Some plugins require a title tag or something similiar to 
 * 			give their gallery a title or other functionality/appearance
 * 			Here you can set one or more or none
 * 
 * @example parentAttr : {title:"This is a title",id:"theID"}
 * 
 * @param triggerEvent
 * 			This is the trigger event you want to use to, umm, trigger 
 * 			the plugin.
 * 
 * @example triggerEvent : 'click' or triggerEvent :'mouseover' or triggerEvent:'load'
 * 
 * @param pluginExec
 * 			This param will be execute just after the structure is create
 * 			based off of the wrapper.  This will be where you would put 
 * 			another plugins function.  The function gets passed the 'this'
 * 			reference so you can do something like below:
 * 
 * @example pluginExec : function(){$(this).jqGalView();} or
 * 							pluginExec : function(){$(this).jqGalScroll();}
 * 
 * 
 * @param Integer tnSize
 * 			This param takes in 0, 1,or 2 and will reference one of the 
 * 			thumbnail spots for picasa or flickr
 * 				picasa: 0 == 72x48, 1 == 144x66, 2 == 288x192
 * 				flickr: 0 == 75x75 or 1 == 100 on long side or 2 == 240 on long side
 * 
 * @param String appendTo
 * 			Set to "self" by default, which will just replace the link with the list
 * 			of images or set it to append the list to any element.
 * 
 * @param Integer count
 * 			This param will allow you to limit the number of elements built
 * 
 * @param String buildFrom
 * 			You have two options here, tn for thumbnails and full for full size
 *
 * @param randomized
 *			Takes in either true or false and will randomize the returned json
 * 
 * @param includeHref
 * 			Takes in either true or false and will include the link to the full size
 * 			image.
 * 
 * changes:
 *	09/14/2007:
 *		Fixed/Added:  ?imgmax=800 to the picasa url because of never ending loading
 *		Added:  Loading message for JSON and processing
 *		Added:  The ability to randomize the returned json
 *
 *	09/13/2007:
 *		Initial Release
 */
(function($){
	$.fn.jqAlbumParser = function(options){
		return this.each(function(index){
			var it = this, $this = $(this);
			it.opts = $.extend({}, $.fn.jqAlbumParser.defaults, options);
			it.index = index;
			it.wrapper = it.opts.wrapper.split('>');
			var cls = it.className;
			it.opts.webAlbum = (cls.match(/wa:(\w+)/)||[])[1] || it.opts.webAlbum;
			it.url = $.fn.jqAlbumParser.urlFix(it,$this.attr('href'));
			
			$this.bind(it.opts.triggerEvent, function(){
				$.fn.jqAlbumParser.loadIndicator('build');
				$('#jqAlbumParserID'+it.index).remove();
				$.ajaxSetup({cache:true});
				$.ajax({
					type:'GET',
					url:it.url,
					success:function(data){$.fn.jqAlbumParser.toJson(data, it);},
					dataType:'jsonp',
					cache:true
				});
				return false;
			});
		});
	};

	$.fn.jqAlbumParser.toJson = function(json, it){
		$.fn.jqAlbumParser.loadIndicator('log', 'Building Photo Array');
		var obj = Object(), cleared = false;
		if(it.opts.webAlbum == 'picasa'){
			obj = $.fn.jqAlbumParser.shuffle(json['feed']['entry'], it.opts.randomized);
			$.jqAlbumParser.photos[it.index] = {};
			$.each(obj,function(i){
				$.fn.jqAlbumParser.loadIndicator('log', 'Process JSON ' + (i+1) + ' of ' + obj.length);
				var elements = {
					tn : {
							url : obj[i]['media$group']['media$thumbnail'][it.opts.tnSize]['url']+'?imgmax=800',
							h : obj[i]['media$group']['media$thumbnail'][it.opts.tnSize]['height'],
							w : obj[i]['media$group']['media$thumbnail'][it.opts.tnSize]['width']
						},
					title : obj[i]['title']['$t'],
					full :{
							url : obj[i]['media$group']['media$content'][0]['url']+'?imgmax=800',
							h : obj[i]['media$group']['media$content'][0]['height'],
							w : obj[i]['media$group']['media$content'][0]['width']
						}
				};

				$.jqAlbumParser.photos[it.index][i]= elements;
			});
			cleared = true;
		}// end: if(it.opts.webAlbum == 'picasa')
		else if(it.opts.webAlbum == 'flickr'){
			obj = $.fn.jqAlbumParser.shuffle(json['items'], it);
			$.jqAlbumParser.photos[it.index] = {};
			$.each(obj,function(i){
				$.fn.jqAlbumParser.loadIndicator('log', 'Process JSON ' + (i+1) + ' of ' + obj.length);
				var elements = {
					tn : {
							url : obj[i]['media']['m'].replace(/_m.jpg/, $.jqAlbumParser.flickrArray[it.opts.tnSize])
						},
					title : obj[i]['title'],
					full :{
							url : obj[i]['media']['m'].replace(/_m/,'')
						}
				};

				$.jqAlbumParser.photos[it.index][i]= elements;
			});
			cleared = true;
		}// end: if(it.opts.webAlbum == 'flickr')
		$.fn.jqAlbumParser.loadIndicator('log', 'End process JSON');
		if(cleared)$.fn.jqAlbumParser.build(it);
	};

	$.fn.jqAlbumParser.build = function(it){
		$.fn.jqAlbumParser.loadIndicator('log', 'Start Build');
		var cnt = it.wrapper.length;
		var child, $parent;
		
		if(cnt < 2){
			return false;
		}
		else{
			$parent = $("<"+$.trim(it.wrapper[0])+">");
			if(it.opts.appendTo == 'self'){
				$(it).before($parent).hide();
			}
			else{
				$parent.appendTo(it.opts.appendTo);
			}
			child = "<"+$.trim(it.wrapper[(cnt-1)])+">";
		}
		
		
		var photos = $.jqAlbumParser.photos[it.index];
		for(i in it.opts.parentAttr){
			$parent.attr(i,it.opts.parentAttr[i]);
		};
		$parent.attr('id','jqAlbumParserID'+it.index);
		for(i in photos){
			var $it = $(child);
			var $img = $('<img src="'+photos[i][it.opts.buildFrom]['url']+'" alt="'+photos[i]['title']+'" title="'+photos[i]['title']+'"/>').appendTo($it);

			if(it.opts.includeHref){
				var $a = $('<a/>').attr('href',photos[i]['full']['url']);
				$img.wrap($a);
			}
			$parent.append($it);
			if(it.opts.count != null && it.opts.count-1 == i){
				break;
			};
		};
		$.fn.jqAlbumParser.loadIndicator('log', 'End Build');
		$.fn.jqAlbumParser.callback(it,$parent);
	};

	$.fn.jqAlbumParser.callback = function(item,$parent){
		$.fn.jqAlbumParser.loadIndicator('log', 'Start Callback');
		item.opts.pluginExec.apply($parent);
		item.opts.callback();
		$.fn.jqAlbumParser.loadIndicator('hide');
	};
	$.fn.jqAlbumParser.urlFix = function(it, url){
		switch(it.opts.webAlbum){
			case 'picasa':
				return url.replace(/alt=rss/g,"alt=json");
			case 'flickr':
				return url +"&format=json&jsoncallback=?";
		}
	}


	// borrowed from http://snippets.dzone.com/posts/show/849
	$.fn.jqAlbumParser.shuffle = function(o, r){ //v1.0
		if(r){
			for(var j, x, i = o.length; i; j = parseInt(Math.random() * i), x = o[--i], o[i] = o[j], o[j] = x);
		}
		return o;
	};

	$.fn.jqAlbumParser.loadIndicator = function(option, txt){
		switch(option){
			case 'build':
				if($('#jqAlbumParserLoader').size() == 0){
					$('<div id="jqAlbumParserLoader">Started: jqAlbumParser</div>').appendTo('body')
						.css({position:'absolute',top:0,right:0,border:'1px solid #f00',background:'#ff99cc'});
				}
				else{
					$('#jqAlbumParserLoader').show();
				};
				break;
			case 'hide':
				$('#jqAlbumParserLoader').hide();
				break;
			case 'log':
				$('#jqAlbumParserLoader').text(txt);
				break;
		};
	};
	
	$.jqAlbumParser = {
		photos		: {},
		flickrArray	: Array('_s.jpg','_t.jpg','_m.jpg')
	};

	$.fn.jqAlbumParser.defaults = {
		wrapper		: "ul > li",
		parentAttr	: {},
		webAlbum	: null,
		triggerEvent: 'click',
		callback	: function(){},
		pluginExec	: function(){},
		tnSize		: 0,
		appendTo	: 'self',
		count		: null,
		buildFrom	: 'tn',
		randomized	: false,
		includeHref	: true
	};
})(jQuery);