# Criando API com o Laravel

projeto em laravel com o intuito de criar um prqueno sitema de Api para fim de estudos.

#### Esse projeto não possui **"validations"**.

# Sobre a API

get: /students -> Retorna todos os estudantes cadastrados no banco de dados(limite de 200)

post: /students -> cadastra um estudante.
Dados requiridos:
* **name**
* **course**

delete: /students/{id} -> deleta o estudante com o ID passado na rota

put: /students/{id} ->  atualiza o estudante com o ID passado na rota
