# 🎮 Jokenpô Web - PHP

Um jogo interativo de Pedra, Papel e Tesoura desenvolvido em PHP com interface web responsiva.

## 📋 Índice
- [Sobre o Projeto](#sobre-o-projeto)
- [Tecnologias Utilizadas](#tecnologias-utilizadas)
- [Estrutura do Projeto](#estrutura-do-projeto)
- [Funcionalidades](#funcionalidades)
- [Como Executar](#como-executar)
- [Licença](#licença)

## 🧠 Sobre o Projeto

O Jokenpô Web é uma aplicação educacional desenvolvida em PHP que simula o clássico jogo Pedra, Papel e Tesoura. O projeto demonstra conceitos fundamentais de desenvolvimento web:

- **Lógica de programação** com condicionais e comparações
- **Manipulação de formulários** PHP (POST/GET)
- **Gerenciamento de sessões** para persistência de dados
- **Desenvolvimento front-end** com HTML5 e CSS3
- **Design responsivo** para diferentes dispositivos

## 🛠️ Tecnologias Utilizadas

| Categoria | Tecnologia |
|-----------|------------|
| **Backend** | PHP 7.4+ |
| **Frontend** | HTML5, CSS3, JavaScript |
| **Armazenamento** | Sessions PHP |
| **Servidor** | Apache/XAMPP/WAMP |
| **Versionamento** | Git |

## 📁 Estrutura do Projeto
jokenpo-web/
├── index.php
├── assets/
│ └── style.css
├── img/
│ ├── pedra.png
│ ├── papel.png
│ ├── tesoura.png
│ └── usu.png
└── README.md

text

## 🎯 Funcionalidades

### ✅ Funcionalidades Principais
- **Sistema completo de escolhas** (Pedra, Papel, Tesoura)
- **Jogada aleatória do computador** usando `array_rand()`
- **Determinação automática do vencedor** com lógica condicional
- **Exibição visual das jogadas** com imagens
- **Feedback imediato** do resultado

### ✅ Interface & UX
- **Layout responsivo** (desktop e mobile)
- **Jogador e computador lado a lado**
- **Design moderno** com gradientes e sombras
- **Animações e transições** CSS
- **Botões interativos** com efeitos hover

### ✅ Sistema de Placar
- **Contador de vitórias** do jogador e computador
- **Contador de empates**
- **Persistência via sessões** PHP
- **Botão de reset** do placar

## 🧩 Lógica do Jogo

### Sistema de Escolhas
````php
$opcoes = [
    'pedra' => 'Pedra',
    'papel' => 'Papel', 
    'tesoura' => 'Tesoura'
];
Jogada do Computador
php
$opcoesArray = array_keys($opcoes);
$computadorEscolha = $opcoesArray[array_rand($opcoesArray)];
````
Sistema de Vitória
php
````
if ($jogadorEscolha == $computadorEscolha) {
    // Empate
} else if (
    ($jogadorEscolha == 'pedra' && $computadorEscolha == 'tesoura') ||
    ($jogadorEscolha == 'papel' && $computadorEscolha == 'pedra') ||
    ($jogadorEscolha == 'tesoura' && $computadorEscolha == 'papel')
) {
    // Jogador vence
} else {
    // Computador vence
}
````
## 🏗️ Estrutura PHP
Sistema de Sessões
php
````
session_start();
if (!isset($_SESSION['placar'])) {
    $_SESSION['placar'] = [
        'jogador' => 0,
        'computador' => 0, 
        'empates' => 0
    ];
}
````
Processamento de Formulários
php
````
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['jogada'])) {
    // Processar jogada do usuário
}
Reset do Placar
php
if (isset($_GET['reset'])) {
    $_SESSION['placar'] = ['jogador' => 0, 'computador' => 0, 'empates' => 0];
    header('Location: index.php');
    exit();
}
````
## 🚀 Como Executar
Pré-requisitos
Servidor web com PHP (XAMPP, WAMP, ou similar)

PHP 7.4 ou superior

Navegador web moderno

Passos para Instalação
Configure o servidor web com suporte a PHP

Coloque os arquivos na pasta htdocs (XAMPP) ou www (WAMP)

Certifique-se que a pasta img/ contém todas as imagens necessárias

Acesse o projeto através de: http://localhost/jokenpo-web/

Comece a jogar! 🎮

## 🎨 Características do Design
Layout
Cabeçalho: Título do jogo com estilo destacado

Placar: Visual em linha com cores diferenciadas

Área de Jogo: Layout horizontal (Jogador VS Computador)

Controles: Botões grandes e intuitivos

Resultados: Feedback colorido conforme resultado

Esquema de Cores
Vitória: Verde (#27ae60)

Derrota: Vermelho (#e74c3c)

Empate: Laranja (#f39c12)

Fundo: Gradiente roxo (#667eea → #764ba2)

Responsividade
Desktop: Layout em linha com espaçamento amplo

Tablet: Ajuste proporcional de elementos

Mobile: Stack vertical com elementos centralizados

##🔧 Personalização
Modificando as Imagens
Substitua os arquivos na pasta img/ mantendo os nomes:

pedra.png - Ícone para pedra

papel.png - Ícone para papel

tesoura.png - Ícone para tesoura

usu.png - Ícone padrão/aguardando

# Alterando o Design
Edite assets/style.css para:

Modificar cores e gradientes

Ajustar tamanhos e espaçamentos

Adicionar novas animações

Personalizar responsividade

## 🧪 Compatibilidade
# Navegadores Testados
✅ Chrome 90+

✅ Firefox 88+

✅ Safari 14+

✅ Edge 90+

# Dispositivos
✅ Desktop (Windows, macOS, Linux)

✅ Tablets (iOS, Android)

✅ Smartphones (iOS, Android)

## 🎯 Melhorias Futuras
Funcionalidades Planejadas
Sistema de ranking com histórico

Modo multiplayer online

Animações CSS mais elaboradas

Efeitos sonoros e música de fundo

Temas customizáveis (claro/escuro)

Estatísticas detalhadas de jogo

Para Estudo
Implementar banco de dados para placar permanente

Adicionar API REST para versão mobile

Criar sistema de torneios

Desenvolver versão PWA (Progressive Web App)

📜 Licença
Este projeto foi desenvolvido para fins educacionais.
Você pode usar, modificar e distribuir livremente, mantendo os créditos originais.

