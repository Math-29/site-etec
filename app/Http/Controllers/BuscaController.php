<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BuscaController extends Controller
{
    public function sugestoes(Request $request)
    {
        $input_user = strtolower(trim($request->input('input_user')));

        if (strlen($input_user) < 3) {
            return response()->json([]);
        }

        $conteudo = [

            // Home
            [
                'texto' => 'etec zona leste',
                'pagina' => 'home',
                'tags' => ['etec', 'escola', 'ensino']
            ],
            [
                'texto' => 'ensino técnico gratuito',
                'pagina' => 'home',
                'tags' => ['curso', 'tecnico', 'gratis']
            ],
            [
                'texto' => 'profissionais qualificados',
                'pagina' => 'home',
                'tags' => ['professores', 'experiencia']
            ],
            [
                'texto' => 'preparação para o mercado de trabalho',
                'pagina' => 'home',
                'tags' => ['emprego', 'carreira']
            ],

            // Vestibulinho
            [
                'texto' => 'vestibulinho etec',
                'pagina' => 'vestibulinho',
                'tags' => ['prova', 'inscricao']
            ],
            [
                'texto' => 'inscrição vestibulinho etec',
                'pagina' => 'vestibulinho',
                'tags' => ['cadastrar', 'site']
            ],
            [
                'texto' => 'como funciona o vestibulinho',
                'pagina' => 'vestibulinho',
                'tags' => ['passos', 'processo']
            ],
            [
                'texto' => 'requisitos para entrar na etec',
                'pagina' => 'vestibulinho',
                'tags' => ['documentos', 'idade']
            ],
            [
                'texto' => 'cotas etec escola pública',
                'pagina' => 'vestibulinho',
                'tags' => ['bonus', 'afrodescendente']
            ],

            // Cursos
            [
                'texto' => 'curso de administração',
                'pagina' => 'cursos',
                'tags' => ['gestao', 'empresa']
            ],
            [
                'texto' => 'curso de contabilidade',
                'pagina' => 'cursos',
                'tags' => ['financas', 'impostos']
            ],
            [
                'texto' => 'desenvolvimento de sistemas',
                'pagina' => 'cursos',
                'tags' => ['programacao', 'software', 'tecnologia']
            ],
            [
                'texto' => 'curso de logística',
                'pagina' => 'cursos',
                'tags' => ['transporte', 'estoque']
            ],
            [
                'texto' => 'curso de recursos humanos',
                'pagina' => 'cursos',
                'tags' => ['rh', 'pessoas']
            ],
            [
                'texto' => 'curso de serviços jurídicos',
                'pagina' => 'cursos',
                'tags' => ['direito', 'documentos']
            ],
            [
                'texto' => 'curso técnico noturno',
                'pagina' => 'cursos',
                'tags' => ['noite']
            ],
            [
                'texto' => 'curso técnico manhã',
                'pagina' => 'cursos',
                'tags' => ['manha']
            ],
            [
                'texto' => 'mtec desenvolvimento de sistemas',
                'pagina' => 'cursos',
                'tags' => ['medio', 'tecnico']
            ],
            [
                'texto' => 'mtec administração',
                'pagina' => 'cursos',
                'tags' => ['gestao']
            ],
            [
                'texto' => 'mtec logística',
                'pagina' => 'cursos',
                'tags' => ['transporte']
            ],
            [
                'texto' => 'mtec recursos humanos',
                'pagina' => 'cursos',
                'tags' => ['rh']
            ],
        ];

        $resultados = [];

        foreach ($conteudo as $item) {

            if (str_contains($item['texto'], $input_user)) {
                $resultados[] = $item;
                continue;
            }

            foreach ($item['tags'] as $tag) {
                if (str_contains($tag, $input_user)) {
                    $resultados[] = $item;
                    break;
                }
            }
        }

        $resultados = array_unique($resultados, SORT_REGULAR);

        return response()->json(array_slice($resultados, 0, 6));
    }
}