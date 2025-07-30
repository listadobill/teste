# 📋 Guia de Instalação - TV DO BILL

Este guia fornece instruções detalhadas para instalar e configurar o TV DO BILL em diferentes ambientes.

## 🎯 Instalação Rápida (Recomendada)

### Para Usuários Iniciantes

1. **Baixe o arquivo**
   - Clique em `index.html` neste repositório
   - Clique em "Download" ou "Raw" e salve o arquivo
   - Salve em uma pasta de sua escolha

2. **Abra o arquivo**
   - Clique duas vezes no arquivo `index.html`
   - Ou clique com botão direito > "Abrir com" > seu navegador preferido

3. **Pronto!**
   - O player já está funcionando
   - Os canais serão carregados automaticamente

## 🌐 Instalação para Web (GitHub Pages)

### Hospedagem Gratuita no GitHub

1. **Crie uma conta no GitHub** (se não tiver)
   - Acesse [github.com](https://github.com)
   - Clique em "Sign up"

2. **Faça fork deste repositório**
   - Clique no botão "Fork" no topo desta página
   - Aguarde a cópia ser criada

3. **Ative o GitHub Pages**
   - Vá em "Settings" do seu repositório
   - Role até "Pages" no menu lateral
   - Em "Source", selecione "Deploy from a branch"
   - Escolha "main" branch e "/ (root)"
   - Clique em "Save"

4. **Acesse seu player**
   - Aguarde alguns minutos
   - Acesse: `https://seu-usuario.github.io/tv-do-bill`

## 💻 Instalação para Desenvolvimento

### Pré-requisitos
- Git instalado
- Navegador web moderno
- Editor de código (opcional)

### Passos

1. **Clone o repositório**
   ```bash
   git clone https://github.com/seu-usuario/tv-do-bill.git
   cd tv-do-bill
   ```

2. **Inicie um servidor local**
   
   **Opção 1: Python (se instalado)**
   ```bash
   # Python 3
   python -m http.server 8000
   
   # Python 2
   python -m SimpleHTTPServer 8000
   ```
   
   **Opção 2: Node.js (se instalado)**
   ```bash
   npx serve .
   # ou
   npx http-server
   ```
   
   **Opção 3: PHP (se instalado)**
   ```bash
   php -S localhost:8000
   ```

3. **Acesse o player**
   - Abra o navegador
   - Vá para `http://localhost:8000`

## 📱 Instalação em Dispositivos Móveis

### Android

1. **Método 1: Navegador**
   - Abra Chrome, Firefox ou Samsung Internet
   - Acesse a URL do seu player
   - Adicione à tela inicial para acesso rápido

2. **Método 2: App Wrapper**
   - Use apps como "Hermit" ou "Native Alpha"
   - Crie um app nativo a partir da URL

### iOS

1. **Safari**
   - Abra o Safari
   - Acesse a URL do player
   - Toque no botão "Compartilhar"
   - Selecione "Adicionar à Tela de Início"

## 📺 Instalação em Smart TVs

### Samsung Tizen

1. **Navegador Tizen**
   - Abra o navegador da TV
   - Digite a URL do player
   - Adicione aos favoritos

2. **Desenvolvimento (Avançado)**
   - Use o Tizen Studio
   - Crie um app WebApp
   - Instale via sideload

### LG webOS

1. **Navegador webOS**
   - Abra o navegador da TV
   - Acesse a URL do player
   - Salve como favorito

### Android TV

1. **Chrome ou Firefox**
   - Instale um navegador da Play Store
   - Acesse a URL do player
   - Use o controle remoto para navegar

## 🔧 Configuração Personalizada

### Alterando a Lista M3U

1. **Edite o arquivo `index.html`**
   - Abra com um editor de texto
   - Procure por `M3U_URL:`
   - Substitua pela sua URL

   ```javascript
   const CONFIG = {
     M3U_URL: "https://sua-lista-aqui.m3u",
     // outras configurações...
   };
   ```

2. **Salve e recarregue**
   - Salve o arquivo
   - Atualize a página no navegador

### Configurações Avançadas

```javascript
const CONFIG = {
  M3U_URL: "sua-lista.m3u",
  AUTO_PLAY_FIRST: false,    // Auto-play do primeiro canal
  RETRY_ATTEMPTS: 3,         // Tentativas de reconexão
  RETRY_DELAY: 2000,         // Delay entre tentativas (ms)
};
```

## 🚨 Solução de Problemas

### Problema: "Arquivo não encontrado"
**Solução**: Verifique se o arquivo `index.html` está na pasta correta

### Problema: "Canais não carregam"
**Soluções**:
- Verifique sua conexão com a internet
- Teste a URL da lista M3U em outro player
- Verifique se a lista está no formato correto

### Problema: "Erro de CORS"
**Soluções**:
- Use um servidor local (não abra o arquivo diretamente)
- Hospede em um servidor web
- Use GitHub Pages

### Problema: "Player não funciona na Smart TV"
**Soluções**:
- Verifique se a TV suporta HTML5
- Teste em navegadores diferentes
- Use uma URL HTTPS

## 📋 Checklist de Instalação

- [ ] Arquivo `index.html` baixado
- [ ] Navegador moderno instalado
- [ ] Conexão com internet ativa
- [ ] Lista M3U configurada (opcional)
- [ ] Teste realizado com sucesso

## 🆘 Suporte

Se você encontrar problemas durante a instalação:

1. **Verifique os requisitos mínimos**
2. **Consulte a seção de solução de problemas**
3. **Abra uma issue no GitHub**
4. **Entre em contato pelo email de suporte**

## 📚 Próximos Passos

Após a instalação bem-sucedida:

1. Leia o [Manual do Usuário](MANUAL.md)
2. Configure sua lista M3U personalizada
3. Explore as configurações avançadas
4. Compartilhe com amigos e família

---

**Precisa de ajuda?** Abra uma [issue](https://github.com/seu-usuario/tv-do-bill/issues) ou consulte nossa [documentação completa](README.md).
