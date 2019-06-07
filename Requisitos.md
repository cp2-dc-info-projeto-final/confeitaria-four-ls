# Especificação de Requisitos

## Sumário

- [Requisitos Funcionais](#Requisitos-funcionais)
    + [RF 01](#RF-01)
    + [RF 02](#RF-02)
    + [RF 03](#RF-03)
    + [RF 04](#RF-04)
    + [RF 05](#RF-05)
    + [RF 06](#RF-06)
    + [RF 07](#RF-07)
    + [RF 08](#RF-08)
    + [RF 09](#RF-09)
    + [RF 10](#RF-10)
    + [RF 11](#RF-11)
    + [RF 12](#RF-12)
    + [RF 13](#RF-13)
- [Requisitos Não Funcionais](#requisitos-não-funcionais)
    + [RNF 01](#rnf-01)
    + [RNF 02](#rnf-02)
    + [RNF 03](#rnf-03)
    + [RNF 04](#rnf-04)
    + [RNF 05](#rnf-05)
    + [RNF 05](#rnf-05)
    + [RNF 06](#rnf-06)
    + [RNF 07](#rnf-07)
    + [RNF 08](#rnf-08)
    + [RNF 09](#rnf-09)
    + [RNF 10](#rnf-10)
    + [RNF 11](#rnf-11)
    + [RNF 12](#rnf-12)

## Requisitos Funcionais

### RF 01

Deve realizar o cadastro do usuário.

### RF 02

Alterar dados pessoais de clientes.

Para isto, o cliente já deve estar previamente cadastrado.

### RF 03

Realizar encomendas

Para isto, o cliente já deve estar cadastrado.

### RF 04

Realizar consultas de disponibilidade dos produtos anunciados (consultar estoque).

### RF 05

Realizar a emissão do valor final.

Para isto, o cliente deve estar cadastrado e estar com produtos em seu carrinho.

### RF 06 

Emitir nota fiscal.

Para isto, o cliente deve ter feito uma compra pelo site.

### RF 07

Mostrar, a partir de imagens, os produtos que estão sendo anunciados.

### RF 08

Cancelar encomendas. 

O cliente deve ter feito e confirmado uma encomenda anteriormente.

### RF 09

Alterar incomendas. 

O cliente deve ter feito e confirmado uma encomenda anteriormente.

### RF 10

Emitir prazo de entrega. 

O cliente deve ter feito e confirmado uma encomenda anteriormente. 

### RF 11

Emitir prazo de alteração da encomenda. 

O cliente deve ter feito e confirmado uma encomenda anteriormente. 

### RF 12

Alteração do valor final da compra. 

Para isto, o cliente deve estar cadastrado no site e por ou retirar algo do seu carrinho.

#### RF 13

Confirmação do pedido através do email. 

Para isto, o cliente deve ter feito uma encomenda a partir do site. 

### RF 14

Área de acesso do operador. 

Área com senha e login onde só o operador do site poderá acessar.

### RF 15

Desabilitar conta.

Para isto, o cliente já deve ter criado uma conta anteriormente. 


## Requisitos Não Funcionais

### RNF 01

O sistema deverá ser fácil de aprender. 

#### RNF 02

O sistema deverá ser fácil de usar.

### RNF 03

O sistema deverá ser disponível a todas as idades.

### RNF 04

O sistema deverá ser rápido e ágil ao realizar uma tarefa, respeitando o tempo de, no máximo, 2 segundos. 

### RNF 05

O sistema deverá ser seguro.

### RNF 06

O sistema deverá passar confiança para o usuário. 

### RF 07

A interface do usuário deverá ser implementada com JavaScript, PHP e HTML. 

### RNF 08

Informações pessoais dos operadores não poderão ser vistas pelos clientes do sistema.

### RNF 09

O sistema deverá suportar uma carga máxima de 1500 usuários simultâneos com uma piora de desempenho de, no máximo, 10% em qualquer operação. 

### RNF 10

O sistema deverá esta disponível pelo menos 99,6% do tempo em dias de semana entre 05:00 e meia-noite e pelo menos 99,8% nos finais de semana entre mesmo horário. Considerando que entre 16:00 e 19:00 o sistema deve estar disponível pelo menos 99,9% do tempo.

### RNF 11

Um programador com pouca experiência na área de suporte ao produto deve ser capaz de dar suporte a um outro dispositivo do sistema em, no máximo, 1h e 30 min. 

### RNF 12

Apenas os operadores do site poderão visualizar informações pessoais e históricos de transações dos clientes.
