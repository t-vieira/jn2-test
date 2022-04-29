## Teste jn2

Primeiramente obrigado pela oportunidade de enviar o teste.

O mesmo foi feito com Laravel 9 e MySQL.

Para funcionar basta fazer o clone do repositório e entrar na pasta laradock que esta na raiz do projeto e dar o comando:

`$ docker-compose up -r nginx mysql`

Depois disso entrar no container por SSH:

`$ docker-compose exec workspace bash`

E rodar o composer install na pasta principal do projeto:

`$ composer install`

Depois migrate da tabela

`$ php artisan migrate`

O sistema esta configura para rodar na porta 80 da máquina.

Rotas estão em http://localhost/api/cliente

Obrigado!
