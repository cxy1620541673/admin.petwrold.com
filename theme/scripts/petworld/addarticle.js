$(function(){
	// 编辑器
	var editor;
	KindEditor.ready(function(K){
		editor = K.create('#a_content', {
			width			: '100%',
			height			: '400px',
			resizeType		: 1,
			syncType		: 'auto',
			allowFileManager: false,
			uploadJson		: '/Article/AjaxUploadImage',
			afterChange 	: function(){
				K.sync('#a_content');
			},
		});
	});
});

// 上传图片
window.setTimeout(function(){
	$("#upload").uploadify({
		auto			: true,
		width			: 100,
		height			: 30,
		formData		: {},
		swf				: '/theme/plugins/uploadify/uploadify.swf',
		// uploader		: '#',
		uploader		: '/Article/AjaxUploadImage',
		fileTypeExts	: '*.png; *.jpg; *.jpeg; *.gif',
		//fileTypeExts  : '*.zip; *.apk; *.gpk',
		buttonText		: '选择文件',
		fileObjName		: 'imgFile',
		buttonClass		: 'btn btn-primary upload-btn icon-file',
		removeTimeout	: 1,
		multi			: false,
		debug			: false,
		onSelect		: function(file) {
			// $('#a_photo').val('1');
			// console.dir(file);
			// $('#upload').uploadify('disable',true);	
		},
		onCancel		: function(file) {
			// console.dir(file);
			$('#a_photo').val('');
			$('#upload').uploadify('disable',false);
		},
		onUploadSuccess	: function(file, data, response) {
			var rData = eval("("+data+")");
			// console.dir(rData);
			$('#a_photo').val(rData.url);
			$('.photo-field .error-tips .img-container').remove();
			$('.photo-field .error-tips').append( '<div class="img-container"><div class="article-cover-shade"><div class="cover-close"></div></div><img class="article-cover" width="100%" src="'+rData.url+'"></div>' );
			$('#upload').uploadify('disable',false);
			$('img.article-cover').load(function(){
				var $img = $(this);
				$('.img-container').mouseover(function(){
					$('.article-cover-shade').show();
				}).mouseout(function(){
					$('.article-cover-shade').hide();
				});
				$('.article-cover-shade').css({
					'width': $img.width(),
					'height': $img.height(),
				});
				$('.cover-close').css({
					'width': 40,
					'height': 40,
				}).click(function(){
					$('.photo-field .error-tips .img-container').remove();
				});
			} );
		},
		onUploadError	: function(file, errorCode, errorMsg) {
			$('#a_photo').val('');
			// console.dir(errorCode);
		}
	});
}, 10);