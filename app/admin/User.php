<?php
Admin::model('\User')->title('Users')->filters(function () {


	{
		Column::image('photo');
		Column::string('name', 'Name');

		Column::string('email', 'Email');

	}
})
	->form(function ()
{

	FormItem::text('name', 'Name')->required();
	FormItem::text('password','Password')->required()->unique();
	FormItem::image('photo', 'Photo');
    FormItem::text('email','Email');
	FormItem::ckeditor('comment', 'Comment');

});

