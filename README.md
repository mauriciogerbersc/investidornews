# news

1. baixar repositório
2. dentro do src do projeto:
3. criar diretório */mysql*
4. no diretório */src* renomear o .env.example para .env
5. docker-compose up --build
6. docker-compose run --rm composer update
7. docker-compose run --rm artisan migrate --seed
