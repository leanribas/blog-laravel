<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index() {
        
        $posts = [
            [
                'img' => 'http://placehold.it/750x200',
                'title' => 'Netflix vai gastar US$ 7 bilhões em conteúdo para 2018',
                'id' => 1,
                'body' => 'Chefe da área de conteúdo da Netflix e “braço direito” do cofundador Reed Hastings, Ted Sarandos deu uma entrevista ao Variety que mostra que a companhia está se preparando para ser mais ousada em 2018: nada menos que US$ 7 bilhões serão reservados apenas para o aumento do acervo do serviço. ',
                'by' => 'José Ricardo',
                'on' => '16 de Setembro de 2017'
            ],
            [
                'img' => 'http://placehold.it/750x200',
                'title' => 'Nokia 8 é anunciado oficialmente com hardware poderoso e câmera dupla',
                'id' => 1,
                'body' => 'O design é de alumínio e tem uma traseira polida, que dá um aspecto espelhado. A certificação é apenas IP54, ou seja, ele tem proteção limitada contra poeira e resiste a espirros de água, mas não pode ser submerso. A Nokia manteve a entrada de fones de ouvido de 3,5 mm (obrigado) e colocou um leitor de impressões digitais na parte frontal, que também conta com botões capacitivos de voltar e aplicativos recentes.',
                'by' => 'José Ricardo',
                'on' => '16 de Setembro de 2017'
            ],
            [
                'img' => 'http://placehold.it/750x200',
                'title' => 'Tasker é um bom app de automatização para Android',
                'id' => 1,
                'body' => 'O Tasker é uma espécie de canivete suíço para Android: ele permite automatizar tarefas com base em contextos, mais ou menos como o IFTTT, só que localmente e de uma forma bem mais completa. O aplicativo custa R$ 11,99, mas está em promoção por R$ 2,99 por tempo limitado na Play Store. É meio complicado explicar o que o Tasker faz, porque o limite é sua criatividade. Para citar um exemplo comum, você pode configurar uma tarefa que desligue o Wi-Fi, reduza o tempo limite de tela e diminua o brilho automaticamente quando a bateria estiver abaixo de um determinado nível. Ou uma que abra o player de música quando você conecta um fone de ouvido.',
                'by' => 'José Ricardo',
                'on' => '16 de Setembro de 2017'
            ]
        ];
        
        return view('posts.index', compact('posts'));
    }
}
