@extends('layouts.app')

@section('content')
    <div class="content">
        <div class="row">
            <div class="col pl-5 pr-5 text-justify">
                <h2>Micro-Documentação</h2>
                <p>
                    Essa micro-documentação está sendo feita para viabilizar o uso dos comandos do Laravel 7.x mais
                    rapidamente, e também para deixar esclarecido algumas convenções que, se usadas, não
                    se fará preciso qualquer configuração a mais no uso.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col pl-5 pr-5">
                <table class="table-bordered table table-striped">
                    <tr>
                        <th>Ação ou Conceito</th>
                        <th>Convenção ou Explicação</th>
                        <th>Dica</th>
                    </tr>
                    <tr>
                        <td>Criar Models</td>
                        <td>php artisan make:model [options] [--] < name> </td>
                        <td>Eloquent model é o nome da parte do framework que faz uma camada entre
                        a base de dados, a data access layer. Sendo assim, ela é agnóstica,
                        isso é, para qualquer base de dados por baixo os comandos a se usar
                        dentro do Laravel são os mesmos.</td>
                    </tr>
                    <tr>
                        <td>Criar Pivot Tables (many to many)</td>
                        <td>r2c2</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Default Values em um Model</td>
                        <td>Ver <a href="https://laravel.com/docs/7.x/eloquent#default-attribute-values">eloquent#default-attribute-values</a></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Convenção nomes:</td>
                        <td>
                            <ul>
                                <li>
                                    Quando criar um atributo num model, esse será guardado na table. Quando esse atributo for
                                    preenchido por formulário, utilizar o mesmo nome do atributo no id, no type, no name e no @ error.
                                </li>
                                <li>
                                    Usar snake_case nos nomes de atributos.
                                </li>
                            </ul>
                        </td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Usar Comandos Nativos</td>
                        <td>PHP Artisan e Composer são amigos. Se houver comando através do PHP artisan, usar ele para criar ou fazer algo. Por exemplo: ao criar numa nova migration (table) ou eloquent model, não fazer por copy paste. Se quiser instalar algum novo requerimento para o Laravel, usar o php composer.</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Iniciar a aplicacao</td>
                        <td>php artisan serve</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>NPM 1</td>
                        <td>O Laravel usa o NPM para compilar o frontend. Portanto sempre que fizer
                        componente novo em Vue.js, por exemplo, tem de usar npm run dev.</td>
                        <td>Usar npm run watch faz com que a aplicação recompile o frontend automaticamente.
                        É bom enquanto desenvolve.</td>
                    </tr>
                    <tr>
                        <td>NPM 2</td>
                        <td>Os elementos do frontend são 3: o SASS, o Vue.js para componentes ajax,
                        e o template engine blade, em PHP. Portanto as views são feitas desses três, e compiladas com npm.
                            Compilamos o frontend porque são muitos arquivos css, html, js misturados.
                            Esses compiladores têm o único objetivo de produzir o menor arquivo que una
                            todos os outros automaticamente, e, na pior das hipóteses, na necessidade
                            de alterar manualmente, há um arquivo específico e simplificado a alterar.
                        </td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>O arquivo .env</td>
                        <td>Esse arquivo contem pares chave-valor que sao usados pela aplicacao como um todo e
                            também podem ser acessados com funções build-in (). Qualquer alteração significa
                            reiniciar a aplicação para fazer efeito.</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>MVC e design patterns</td>
                        <td>
                            <ul>
                                <li>O Laravel usa varios padroes empresariais e de software de uma forma
                                    chamada fluente, por causa de as funcoes serem usadas tal como se fosse
                                    ingles falado, ou escrito.</li>
                                <li>Para a base de dados, o padrao é o Active Record. Isso significa que um Model tem
                                    funcoes built in, por herança, para se alterar na base de dados.
                                </li>
                                <li>Outro detalhe é como se realiza o MVC: Para um modelo, criar pelo artisan o model
                                    e a table respectiva. Para a View e Controller, a View pode ser feita
                                com copy-paste de outra, mas o controller é feito pelo artisan.
                                A passagem de dados na view é feita através do padrao dependency injection, com anotacoes
                                e com a template syntax, mustache syntax. Geralmente se manda um Model atraves do controller como uma variável
                                que vai ficar acessível no escopo da view (e acessada pelo mustache syntax). No
                                Controller daquela view, podemos especificar funcoes (que serao funcoes de verbos REST)
                                que podemos programar o que quisermos em PHP. Finalmente, para ligar uma view e um controller de forma que seja visível,
                                é preciso ir no .web e colocar, na sintaxe respectiva, uma rota nova que carrega certa view e certo controller @ uma funcao do controller.
                                @ é bom ser lido no usual, "at", e assim load me a given view using given controller at given function(ality).</li>
                            </ul>
                            </td>
                        <td></td>
                    <tr>
                        <td>O arquivo .web</td>
                        <td>Aqui ficam todas as rotas da aplicação</td>
                        <td></td>
                    </tr>
                    <tr>
                    </tr>
                    <tr>
                        <td>Tinker</td>
                        <td>Laravel vem com um prompt para logar na aplicação e fazer o que quiser, emulando php.
                        Basta fazer php artisan tinker.</td>
                        <td>Vamos supor que queira ver todos os users: User::all(). Vamos supor que queira colocar
                        variavel um certo user da db: $user = User::find(n), em que n leva a
                        user existente. Lembre-se todos os modelos herdam Model que tem metodos active record para puxar
                        valores direto da base de dados. Cada active record se refere a uma LINHA da table</td>
                    </tr>
                    <tr>
                        <td>Migrations I</td>
                        <td>php artisan migrate vai criar na base de dados as tabelas que estão em database/migrations</td>
                        <td>
                            <ul>
                                <li>$variable->save() : persiste alteracao no modelo na db.</li>
                                <li>$variable->push() : persiste alteracao de algo relacionado ao modelo
                                    na db. "Salve a mim e as mudanças nas minhas relações"</li>
                                <li>
                                    <ul>
                                        <li>1-to-1: Owner: ->hasOne(Owned::Class), Owned: ->belongsTo(Owner::Class)</li>
                                        <li>1-to-1: Owner: ->hasMany(Owned::Class), Owned: ->belongsTo(Owner::Class)</li>
                                        <li>Many-to-Many: </li>
                                    </ul>
                                    <ul>
                                        <li>1-to-1: Owner: funcao tem nome em singular, Owned: idem</li>
                                        <li>1-to-1: Owner: funcao tem nome no plural, Owned: nome em singular</li>
                                        <li>Many-to-Many: </li>
                                    </ul>

                                </li>
                            </ul></td>
                    </tr>

                    <tr>
                        <td>Migrations II</td>
                        <td>Laravel vai saber o que fazer se as convenções forem bem
                        usadas. Isso significa que se, por exemplo, um model chama
                        User, se, ao descrever a relacao dele como user() num outro model
                        que se pretende reestabelecer uma relacao, e se usar
                        user_id como coluna para a FK na table do outro Model,
                        o Laravel vai saber achar quem é quem.</td>
                        <td>Ver isso acontecendo em Profile.php, e na profile table.</td>
                    </tr>
                    <tr>
                        <td>Criar Controllers</td>
                        <td>php artisan make:controller [options] [--] < name> </td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Variáveis nos Routers</td>
                        <td>De acordo com o modelo REST, quando queremos fazer a action SHOW
                        de um recurso, nós colocamos o final do endereço do recurso como
                        /recursos/{identificador_do_recurso}, sendo essa anotação
                        já responsável por atribuir uma variável a última parte.</td>
                        <td>Exemplos: return redirect("/profile/{$user->id}"); <br>
                            O Laravel é capaz de achar o caminho porque ele considera como ponto de entrada
                            o diretório public, e o faz por default (não é preciso preocupar que um utilizador
                            não conseguirá ir a outros sítios para além dos que há em public.)
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
@endsection
