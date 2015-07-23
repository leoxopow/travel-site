<?php

Admin::model('\Post')->title('Posts')
    ->columns(function () {
        Column::string('title');
        Column::string('author');
        Column::string('category.title', 'Category');


    })->form(function () {
        FormItem::text('title', 'Title')->required()->unique();
        FormItem::select('category_id', 'Category')->list(\Category::getList())->required();
        FormItem::textarea('description', 'Description');
        FormItem::ckeditor('body', 'Text')->required();
        FormItem::select('typecol', 'Columns')->list([0 => 'OneColumn', 1 => 'TwoColumns', 2 => 'FullScreen']);
        FormItem::image('thumbnail', 'Image');
    }

    );