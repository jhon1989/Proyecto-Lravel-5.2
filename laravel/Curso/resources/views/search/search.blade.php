	{{Form::text('search', null, ['onfocus'=>"this.value = '';", 'onblur'=>"if(this.value==''){this.value = 'Search..';}"])}}
	{{Form::submit('')}}