$(function(){

	// 初始化表格
	TableEditable.init();

	// 查找按钮
	$('.btn-search').click(function(){
		TableEditable.search();
	});

	// 全选按钮
	$('#list_table th input.select-all').click(function(){
		$(this).parents("#list_table").find('tbody input.select-row').click();
	});

});