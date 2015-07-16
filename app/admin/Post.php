<?php

Admin::model('\Post')->title('Posts')


    ->columns(function(){
        Column::string('title');
        Column::string('author');
        column::string('category');



    })->form(function () {
        FormItem::text('title', 'Title')->required()->unique();
        FormItem::select('category_id', 'Category')->list(\Category::getList())->required();
        FormItem::ckeditor('text', 'Text')->required();
//        FormItem::image('image', 'Image')->required();

    }

    );