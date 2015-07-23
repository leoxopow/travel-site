<?php
Admin::model('\Category')->title('Category')

    ->columns(function(){

        Column::string('title');
        Column::string('description');
        Column::string('slug');
        Column::string('color');
    })

    ->form(function()
    {
        FormItem::text('title','Title')->required()->unique();
        FormItem::text('description','Description')->required();
        FormItem::text('slug','Slug');
        FormItem::text('color','Color (hex)');

    });