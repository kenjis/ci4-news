<?php

namespace App\Controllers;

use App\Models\NewsModel;

class News extends BaseController
{
    public function index()
    {
        $model = model(NewsModel::class);

        $data = [
            'news'  => $model->getNews(),
            'title' => 'News archive',
        ];

        return view('templates/header', $data)
            . view('news/overview')
            . view('templates/footer');
    }

    public function view($slug = null)
    {
        $model = model(NewsModel::class);

        $data['news'] = $model->getNews($slug);

        if (empty($data['news'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Cannot find the news item: ' . $slug);
        }

        $data['title'] = $data['news']['title'];

        return view('templates/header', $data)
            . view('news/view')
            . view('templates/footer');
    }

    public function create()
    {
        helper('form');

        $post = $this->request->getPost(['title', 'body']);

        if (
            strtolower($this->request->getMethod()) === 'post'
            && $this->validateData($post, [
                'title' => 'required|min_length[3]|max_length[255]',
                'body'  => 'required|min_length[10]|max_length[5000]',
            ])
        ) {
            $model = model(NewsModel::class);
            $model->save([
                'title' => $post['title'],
                'slug'  => url_title($post['title'], '-', true),
                'body'  => $post['body'],
            ]);

            return view('templates/header', ['title' => 'Create a news item'])
                . view('news/success')
                . view('templates/footer');
        }

        return view('templates/header', ['title' => 'Create a news item'])
            . view('news/create')
            . view('templates/footer');
    }
}
