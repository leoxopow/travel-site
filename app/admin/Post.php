<?php

Admin::model('\Post')
    ->columns(function(){
//        Column::string('title', 'Title');

    })
    ->title('Posts')
    ->form(function () {
        FormItem::text('title', 'Title')->required();
//        FormItem::ckeditor('body', 'Text');
    });