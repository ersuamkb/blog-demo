<?php

class HomeModule {

	public static function searchArticleByCreated_at()
    {
        return Article::limit(5)->orderBy('created_at','DESC')->get();

    }
    public static function searchArticleByCommentNum()
    {
        return Article::limit(5)->orderBy('count','DESC')->get();
    }
}