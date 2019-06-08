# Especificação de Casos de Uso

# Sumário
+ [CDU 01 – Fazer cadastro](#cdu-01---fazer-cadastro)
- [CDU 02 – Escolher produto](#cdu-02---escolher-produto)
- [CDU 03 – Finalizar Compra](#cdu-03---finalizar-compra)
- [CDU 04 – Alterar pedido](#cdu-04---alterar-pedido)
- [CDU 05 – Cancelar pedido](#cdu-05---cancelar-pedido)
- [CDU 06 – Fazer um comentário](#cdu-06---fazer-um-comentário)

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

1. O cliente digita o código do produto.

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

4. O sistema registra o pedido no histórico do cliente

## CDU 04 – Alterar pedido

**Atores:** Cliente

**Pré-condições:** O cliente deve estar cadastrado e já ter confirmado o pedido

**Fluxo principal:** 

1. O cliente entra na área do cliente.

2. O cliente seleciona o produto pedido.

3. O cliente altera o pedido dentro do prazo dado.

4. O cliente confirma a alteração.

5. O sistema registra as alterações no histórico do cliente.

## CDU 05 – Cancelar pedido

**Atores:** Cliente 

**Pré-condições:** O cliente deve ser cadastrado e ter confirma o pedido com todas ou nenhuma alteração.

**Fluxo principal:**

1. O cliente seleciona o pedido.

2. O cliente cancela o pedido dentro do prazo permitido.

3. O cliente confirma o cancelamento.

4. O sistema registra o cancelamento no histórico do cliente.



## CDU 06 – Fazer um comentário

**Atores:** Cliente 

**Pré-condições:** O cliente deve se identificar com o email.

**Fluxo principal:**

1. O cliente digita o comentário

2. O cliente envia o comentário.

3. O sistema exibe o comentário.


