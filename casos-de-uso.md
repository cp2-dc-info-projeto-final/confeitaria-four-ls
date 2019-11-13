# Especificação de Casos de Uso

# Sumário
- [CDU 01 – Fazer cadastro](#cdu-01---Fazer-cadastro)
- [CDU 02 – Escolher produto](#cdu-02---Escolher-produto)
- [CDU 03 – Finalizar pedido](#cdu-03---Finalizar-pedido)
- [CDU 04 – Alterar pedido](#cdu-04---Cancelar-pedido)
- [CDU 05 – Cancelar pedido](#cdu-05---Fazer-login)
- [CDU 06 – Fazer um comentário](#cdu-06---Ter-acesso-aos-nossos-doces)

# Descrição

## CDU 01 – Fazer cadastro

**Atores:** Cliente 

**Pré-condições:** O cliente deve possuir um email

**Fluxo principal:**

1. O cliente coloca o email.

2. O cliente escolhe uma senha.

3. O cliente coloca suas informações pessoais (nome, CPF, data de nascimento e etc..)

4. O sistema guarda as informações

5. O sistema leva o cliente para a área do cliente

## CDU 02 – Escolher produto

**Atores:** Cliente

**Pré-condições:** O cliente deve estar cadastrado do nosso sistema.

**Fluxo principal:**

1. O cliente escolhe um produto exibido.

2. O cliente escolhe o tamanho do produto.

3. O cliente escolhe o sabor.

4. O cliente escolhe o complemento.

5. O cliente escolhe a quantidade.

6. O sistema registra as escolhas.

**Fluxo alternativo:**

2. O cliente escolhe o tamanho do produto.

3. O cliente escolhe a quantidade.

4. O sistema registra o produto escolhido.
   
## CDU 03 – Finalizar pedido

**Atores:** Cliente 

**Pré-condições:** O cliente deve estar cadastrado no sistema e já deve ter feito as escolhas dos produtos.

**Fluxo principal:**

1. O sistema calcula o preço total do produto.

2. O sistema exibe o preço para o cliente.

3. O cliente confirma o pedido.


## CDU 04 – Cancelar pedido

**Atores:** Cliente 

**Pré-condições:** O cliente deve ser cadastrado e ter confirma o pedido com todas ou nenhuma alteração.

**Fluxo principal:**

1. O cliente seleciona o pedido.

2. O cliente verifica os itens selecionados por ele.

3. O cliente confirma o cancelamento.


## CDU 05 – Fazer login

**Atores:** Cliente e moderador

**Pré-condições:** Ter uma conta em nosso Site.
**Fluxo principal:** 

1. O cliente ou moderador,que ja possua cadastro,insere seu login e senha.

2. Caso os dados informados estejam corretos,o usuário é redirecionado para sua página.

**Fluxo alternativo:** 

1. Os dados informados pelo usuario não são os mesmos contidos no banco de dados. Assim,o sistema não ira permitir a entrada do usuário em sua página.

## CDU 06 - Ter acesso aos nossos doces

**Atores:**  Cliente

**Pré-condições:** O cliente deve estar em nosso site.
**Fluxo principal:**

1. O usuario,idependente de estar,ou não,logado,deverá ir para a página "cardapio". 
