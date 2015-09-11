<link rel="stylesheet" href="/theme/plugins/kindeditor/themes/default/default.css" />
<link rel="stylesheet" href="/theme/plugins/uploadify/uploadify.css" />
<script type="text/javascript" src="/theme/plugins/kindeditor/kindeditor-min.js"></script>
<script type="text/javascript" src="/theme/plugins/kindeditor/lang/zh_CN.js"></script>
<script type="text/javascript" src="/theme/plugins/uploadify/jquery.uploadify.min.js"></script>
<script type="text/javascript" src="/theme/scripts/petworld/addarticle.js"></script>

<div class="row">
	<div class="col-md-12">
		<h3 class="page-title"> 文章添加 </h3>
		<ul class="page-breadcrumb breadcrumb">
			<li>
				<i class="icon-home"></i>
				<a href="/index">首页</a> 
			</li>
			<li>
				<i class="icon-angle-right"></i>
				<a href="/Article/ListArticle">文章管理</a> 
			</li>
			<li>
				<i class="icon-angle-right"></i>
				<a href="/Article/AddArticle">文章添加</a> 
			</li>
		</ul>
	</div>
</div>

<form class="form-horizontal" id="addarticle-form" action="/Article/AjaxAddArticle">
	<div class="row">
		<div class="col-md-9">
			<div class="form-group">
				<label class="col-sm-1 control-label"><font color="red"> * </font>文章标题</label>
				<div class="col-sm-10 error-tips">
					<input type="text" class="form-control" id="a_title" name="a_title" data-required="必填">
				</div>
			</div>
			<div class="row">
				<div class="col-md-3">
					<div class="form-group">
						<label class="col-sm-4 control-label"><font color="red"> * </font>作者名称</label>
						<div class="col-sm-7 error-tips">
							<input type="text" class="form-control" id="a_author_name" name="a_author_name" data-required="必填" value="宠物世界">
						</div>
					</div>
				</div>
				<!-- <div class="col-md-3">
					<div class="form-group">
						<label class="col-sm-4 control-label"><font color="red"> * </font>作者类型</label>
						<div class="col-sm-5 error-tips">
							<select class="form-control" id="a_author_type" name="a_author_type" data-required="必选">
								<option value="1">管理员</option>
								<option value="2">用户</option>
							</select>
						</div>
					</div>
				</div> -->
				<div class="col-md-1">
					<div class="form-group">
						<label class="col-sm-12 control-label">
							<input class="form-control" type="checkbox" name="a_is_anonymous" id="a_is_anonymous" />
							<span>匿名</span>
						</label>
					</div>
				</div>
				<div class="col-md-1">
					<div class="form-group">
						<label class="col-sm-12 control-label">
							<input class="form-control" type="checkbox" name="a_is_show" id="a_is_show" />
							<span>隐藏</span>
						</label>
					</div>
				</div>
				<div class="col-md-1">
					<div class="form-group">
						<label class="col-sm-12 control-label">
							<input class="form-control" type="checkbox" name="a_is_private" id="a_is_private" />
							<span>私有</span>
						</label>
					</div>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-1 control-label"><font color="red"> * </font>文章描述</label>
				<div class="col-sm-10 error-tips">
					<textarea class="form-control" rows="3" id="a_desc" name="a_desc" style="resize:none;" data-required="必填"></textarea>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-1 control-label"><font color="red"> * </font>文章内容</label>
				<div class="col-sm-10 error-tips">
					<textarea class="form-control" id="a_content" name="a_content" data-required="必填"></textarea>
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="form-group">
				<label class="col-sm-3 control-label"><font color="red"> * </font>文章分类</label>
				<div class="col-sm-7 error-tips">
					<select class="form-control" id="at_id" name="at_id" data-required="必选">
						<option value="">请选择</option>
						<option value="0">分类</option>
						<option value="1">分类</option>
						<option value="2">分类</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label"><font color="red"> * </font>宠物分类</label>
				<div class="col-sm-7 error-tips">
					<select class="form-control" id="p_id" name="p_id" data-required="必选">
						<option value="">请选择</option>
						<option value="0">旺财</option>
						<option value="1">招财</option>
						<option value="2">发财</option>
					</select>
				</div>
			</div>
			<div class="form-group photo-field">
				<label  class="col-sm-3 control-label"><font color="red"> * </font>图片上传</label>
				<div class="col-md-7 error-tips">
					<div>
						<input class="form-control" id="a_photo" name="a_photo" type="hidden" data-required="必选" style="width:100px;" />
						<span id="upload" name="upload"></span>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-3">
			<a href="/Article/ListArticle"><button type="button" class="btn btn-warning">取消</button></a>
			<button type="button" class="btn btn-info draft-btn" data-formid="addarticle-form">存草稿</button>
			<button type="button" class="btn btn-success sm-btn" data-formid="addarticle-form">保存并发布</button>
		</div>
	</div>
</form>
