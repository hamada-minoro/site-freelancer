<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
</p>

## Sobre o Projeto

Meu primeiro projeto laravel, acompanhando as aulas do Rafael Lunardelli na plataforma Rocketseat, criamos um site onde os clientes podem expor suas necessidades e receberem uma proposta de desenvolvedores freelancer em formato de horas trabalhadas.

## Learning Laravel

Tenho uma expeciencia prévia com PHP, e por necessidade de evolução das minhas ferramentas de trabalho comecei a me especializar no maior framework de PHP do mercado, no começo foquei num ambiente de desenvolvimento com docker-sail utilizando MySql, porém durante as aulas me foi apresentado o Herd, que além de ter uma interface moderna e intuitiva, configura o ambiente de forma bem simples.

A proposta das aulas era fazer o sistema com Sqlite, porém não quis abrir mão do MySql e segui construindo o sistema nele.

## Comandos após clonagem do repositório

Após clonagem do repositório, caminha até a pasta do projeto
```sh
cd site-freelancer/
```


Crie o Arquivo .env
```sh
cp .env.example .env
```
Atualize essas variáveis de ambiente no arquivo .env
```dosini
APP_NAME="Site-Freelancer"

DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=site-freelancer
DB_USERNAME=root
DB_PASSWORD=sua_senha_aqui

```
Instale as dependências do projeto
```sh
composer install
```


Gere a key do projeto Laravel
```sh
php artisan key:generate
```

Faça a migrate do database
```sh
php artisan migrate
```


Acesse o projeto
[http://site-freelancer.test](http://site-freelancer.test)


## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
