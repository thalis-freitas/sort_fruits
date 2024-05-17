# Ordenação de Listas de Frutas

Aplicação que recebe um arquivo `.txt` contendo uma lista de frutas e retorna a mesma lista ordenada em ordem alfabética.

OBS: **Caso ainda não tenha instalado o Docker, você pode baixá-lo e instalá-lo a partir do [site oficial do Docker](https://www.docker.com/).**

## Passo a passo para rodar o projeto

Clone o projeto:

```
git clone git@github.com:thalis-freitas/sort_fruits.git
```

Acesse o diretório do projeto:

```
cd sort_fruits
```

Certifique-se de que o Docker esteja em execução em sua máquina e construa as imagens:

```
docker compose build
```

Suba os containers:

```
docker compose up -d
```

Acesse http://localhost:8000/

## Como rodar os testes

Acesse o container da aplicação:

```
docker compose exec app bash
```

Rode os testes:

```
phpunit tests/
```

## Como derrubar a aplicação

```
docker compose down
```
