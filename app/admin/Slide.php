<?php

Admin::model('\Slide')->title('Slides')
    ->columns(function () {
        Column::string('post.title', 'Post');
        Column::string('category.title', 'Category');
    })
    ->form(function () {
        FormItem::select('post_id', 'Post')->list(\Post::getList())->required();
//        FormItem::select('category_id', 'Category')->list(\Category::getList())->required();
    });