# 📺 TV DO BILL - IPTV Player Web

Um player IPTV web moderno e compatível com diversos dispositivos, incluindo Smart TVs, celulares e computadores.

## 🚀 Características

- **Layout Simples e Limpo**: Interface minimalista e intuitiva
- **Compatibilidade Universal**: Funciona em navegadores, Smart TVs e dispositivos móveis
- **Suporte Avançado de Codecs**: Integração com Video.js, HLS.js e DASH.js
- **Tratamento Robusto de Erros**: Mensagens claras e sistema de retry automático
- **Navegação por Teclado**: Ideal para Smart TVs e controles remotos
- **Design Responsivo**: Adapta-se automaticamente ao tamanho da tela
- **Carregamento Otimizado**: Funciona bem mesmo em conexões lentas

## 🎯 Compatibilidade

### Navegadores Suportados
- ✅ Chrome/Chromium (versão 80+)
- ✅ Firefox (versão 75+)
- ✅ Safari (versão 13+)
- ✅ Edge (versão 80+)
- ✅ Opera (versão 67+)

### Dispositivos
- 💻 **Computadores**: Windows, macOS, Linux
- 📱 **Celulares**: Android, iOS
- 📺 **Smart TVs**: Samsung Tizen, LG webOS, Android TV
- 🎮 **Consoles**: PlayStation, Xbox (navegadores)

### Formatos de Stream Suportados
- 🎬 **HLS** (.m3u8) - HTTP Live Streaming
- 🎬 **DASH** (.mpd) - Dynamic Adaptive Streaming
- 🎬 **MP4** - Vídeo padrão
- 🎬 **TS** - Transport Stream
- 🎬 **WebM** - Formato web otimizado

## 📋 Pré-requisitos

- Navegador web moderno com suporte a HTML5
- Conexão com a internet
- Lista M3U válida (o projeto vem com uma lista de exemplo)

## 🛠️ Instalação

### Método 1: Download Direto
1. Baixe o arquivo `index.html`
2. Abra em qualquer navegador web
3. Pronto! O player já está funcionando

### Método 2: Servidor Local
```bash
# Clone o repositório
git clone https://github.com/seu-usuario/tv-do-bill.git

# Entre na pasta
cd tv-do-bill

# Inicie um servidor local (Python)
python -m http.server 8000

# Ou use Node.js
npx serve .

# Acesse http://localhost:8000
```

### Método 3: GitHub Pages
1. Faça fork deste repositório
2. Vá em Settings > Pages
3. Selecione "Deploy from a branch"
4. Escolha "main" branch
5. Seu player estará disponível em: `https://seu-usuario.github.io/tv-do-bill`

## 🎮 Como Usar

### Navegação Básica
- **Clique** em um canal para selecioná-lo
- **Espaço/Enter** para play/pause
- **Setas ↑↓** para navegar entre canais
- **Escape** para sair da tela cheia

### Controles do Player
- **Play/Pause**: Clique no botão ou use Espaço
- **Volume**: Use os controles do player
- **Tela Cheia**: Clique no ícone ou pressione F
- **Velocidade**: Menu de configurações do player

### Smart TV
- Use o controle remoto para navegar
- Botão OK/Enter para selecionar
- Setas direcionais para navegar
- Botão Voltar/Exit para sair da tela cheia

## ⚙️ Configuração

### Alterando a Lista M3U
Edite o arquivo `index.html` e modifique a linha:
```javascript
M3U_URL: "https://sua-lista-m3u-aqui.m3u"
```

### Configurações Avançadas
No arquivo `index.html`, você pode modificar:
```javascript
const CONFIG = {
  M3U_URL: "sua-lista.m3u",
  AUTO_PLAY_FIRST: false,    // Auto-play do primeiro canal
  RETRY_ATTEMPTS: 3,         // Tentativas de reconexão
  RETRY_DELAY: 2000         // Delay entre tentativas (ms)
};
```

## 🔧 Solução de Problemas

### "Formato não suportado"
- **Causa**: O codec do stream não é suportado pelo navegador
- **Solução**: Verifique se o provedor oferece streams em formatos compatíveis (H.264/AAC)

### "Conteúdo Misto" (HTTP/HTTPS)
- **Causa**: Streams HTTP em páginas HTTPS são bloqueados
- **Solução**: Use streams HTTPS ou acesse a página via HTTP

### Canais não carregam na Smart TV
- **Causa**: Limitações de codec ou rede
- **Solução**: Verifique a conexão e compatibilidade da TV

### Player não inicializa
- **Causa**: JavaScript desabilitado ou navegador muito antigo
- **Solução**: Ative JavaScript e atualize o navegador

## 🚨 Limitações Conhecidas

1. **Codecs Proprietários**: Alguns streams podem usar codecs não suportados
2. **DRM**: Conteúdo protegido por DRM não é suportado
3. **Autoplay**: Navegadores modernos bloqueiam autoplay por padrão
4. **CORS**: Alguns servidores podem bloquear requisições cross-origin

## 🔒 Segurança e Privacidade

- ✅ Não coleta dados pessoais
- ✅ Não usa cookies de rastreamento
- ✅ Todo processamento é local
- ✅ Código fonte aberto e auditável
- ⚠️ Use apenas listas M3U legais e autorizadas

## 🤝 Contribuindo

Contribuições são bem-vindas! Para contribuir:

1. Faça fork do projeto
2. Crie uma branch para sua feature (`git checkout -b feature/AmazingFeature`)
3. Commit suas mudanças (`git commit -m 'Add some AmazingFeature'`)
4. Push para a branch (`git push origin feature/AmazingFeature`)
5. Abra um Pull Request

### Áreas que Precisam de Ajuda
- 🌐 Traduções para outros idiomas
- 📱 Testes em mais dispositivos
- 🎨 Melhorias de design
- 🔧 Otimizações de performance
- 📚 Documentação

## 📄 Licença

Este projeto está licenciado sob a Licença MIT - veja o arquivo [LICENSE](LICENSE) para detalhes.

## 🙏 Agradecimentos

- [Video.js](https://videojs.com/) - Player de vídeo HTML5
- [HLS.js](https://github.com/video-dev/hls.js/) - Biblioteca HLS para navegadores
- [DASH.js](https://github.com/Dash-Industry-Forum/dash.js/) - Player DASH de referência
- Comunidade open source por todas as contribuições

## 📞 Suporte

- 🐛 **Bugs**: Abra uma [issue](https://github.com/seu-usuario/tv-do-bill/issues)
- 💡 **Sugestões**: Use as [discussions](https://github.com/seu-usuario/tv-do-bill/discussions)
- 📧 **Contato**: [seu-email@exemplo.com](mailto:seu-email@exemplo.com)

## 📊 Status do Projeto

![GitHub last commit](https://img.shields.io/github/last-commit/seu-usuario/tv-do-bill)
![GitHub issues](https://img.shields.io/github/issues/seu-usuario/tv-do-bill)
![GitHub stars](https://img.shields.io/github/stars/seu-usuario/tv-do-bill)
![GitHub forks](https://img.shields.io/github/forks/seu-usuario/tv-do-bill)

---

**Desenvolvido com ❤️ por Bill**

*TV DO BILL - Transformando qualquer dispositivo em uma Smart TV*

