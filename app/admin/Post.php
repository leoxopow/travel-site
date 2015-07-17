<?php

Admin::model('\Post')->title('Posts')


    ->columns(function(){
        Column::string('title');
        Column::string('author');
        Column::string('category');



    })->form(function () {
        FormItem::text('title', 'Title')->required()->unique();
        FormItem::select('category_id', 'Category')->list(\Category::getList())->required();
        FormItem::textarea('description', 'Description');
        FormItem::ckeditor('body', 'Text')->required();
        FormItem::image('thumbnail', 'Image');
    }

    );