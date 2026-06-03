(function () {
    const API_URL = 'api/chat.php';
    const STORAGE_KEY = 'toptop_chat_history';

    const chatLauncher = document.getElementById('chat-launcher');
    const chatTeaser = document.getElementById('chat-teaser');
    const teaserClose = document.getElementById('teaser-close');
    const chatWindow = document.getElementById('chat-window');
    const chatClose = document.getElementById('chat-close');
    const chatMessages = document.getElementById('chat-messages');
    const chatInput = document.getElementById('chat-input');
    const chatSend = document.getElementById('chat-send');

    if (!chatMessages || !chatInput) return;

    let history = loadHistory();
    let isSending = false;

    const WELCOME_HTML = `
        <div class="ai-msg-bubble msg-bubble">
            Bonjour ! Je suis <strong>Diarra</strong> ✨, votre assistante TopTop Clean KD.
            Comment puis-je vous aider aujourd'hui ?
        </div>
        <div class="quick-actions-list mt-3" id="chat-quick-actions">
            <button type="button" class="btn btn-outline-custom w-100 mb-2" data-prompt="Je souhaite obtenir un devis gratuit, comment procéder ?">Demander un devis</button>
            <button type="button" class="btn btn-outline-custom w-100 mb-2" data-prompt="Quels services de nettoyage proposez-vous pour bureaux et commerces ?">Nos services</button>
            <button type="button" class="btn btn-outline-custom w-100" data-prompt="Proposez-vous un nettoyage écologique ?">Nettoyage écologique</button>
        </div>
    `;

    function loadHistory() {
        try {
            const raw = sessionStorage.getItem(STORAGE_KEY);
            return raw ? JSON.parse(raw) : [];
        } catch {
            return [];
        }
    }

    function saveHistory() {
        try {
            sessionStorage.setItem(STORAGE_KEY, JSON.stringify(history.slice(-20)));
        } catch (_) {}
    }

    function openChat() {
        chatWindow.classList.remove('d-none');
        chatLauncher.classList.add('d-none');
        if (chatTeaser) chatTeaser.style.display = 'none';
        chatInput.focus();
    }

    function closeChat() {
        chatWindow.classList.add('d-none');
        chatLauncher.classList.remove('d-none');
    }

    function escapeHtml(text) {
        const div = document.createElement('div');
        div.textContent = text;
        return div.innerHTML;
    }

    function formatReply(text) {
        return escapeHtml(text).replace(/\n/g, '<br>');
    }

    function appendBubble(role, html) {
        const el = document.createElement('div');
        el.className = role === 'user' ? 'user-msg-bubble msg-bubble' : 'ai-msg-bubble msg-bubble';
        el.innerHTML = html;
        chatMessages.appendChild(el);
        chatMessages.scrollTop = chatMessages.scrollHeight;
    }

    function showTyping() {
        const el = document.createElement('div');
        el.id = 'chat-typing';
        el.className = 'ai-msg-bubble msg-bubble chat-typing';
        el.innerHTML = '<span></span><span></span><span></span>';
        chatMessages.appendChild(el);
        chatMessages.scrollTop = chatMessages.scrollHeight;
    }

    function hideTyping() {
        document.getElementById('chat-typing')?.remove();
    }

    function removeQuickActions() {
        document.getElementById('chat-quick-actions')?.remove();
    }

    function renderFromHistory() {
        chatMessages.innerHTML = '';
        if (history.length === 0) {
            chatMessages.innerHTML = WELCOME_HTML;
            bindQuickActions();
            return;
        }
        history.forEach((item) => {
            if (item.role === 'user') {
                appendBubble('user', formatReply(item.content));
            } else if (item.role === 'assistant') {
                appendBubble('assistant', formatReply(item.content));
            }
        });
    }

    function bindQuickActions() {
        document.querySelectorAll('#chat-quick-actions [data-prompt]').forEach((btn) => {
            btn.addEventListener('click', () => {
                const prompt = btn.getAttribute('data-prompt');
                if (prompt) sendMessage(prompt);
            });
        });
    }

    async function sendMessage(text) {
        const message = (text || chatInput.value).trim();
        if (!message || isSending) return;

        removeQuickActions();
        appendBubble('user', formatReply(message));
        chatInput.value = '';
        isSending = true;
        chatSend.disabled = true;
        showTyping();

        try {
            const res = await fetch(API_URL, {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify({ message, history }),
            });

            const data = await res.json().catch(() => ({}));
            hideTyping();

            if (!res.ok) {
                appendBubble('assistant', formatReply(data.error || 'Désolée, un problème est survenu. Réessayez ou appelez le 06 12 34 56 78.'));
                return;
            }

            const reply = data.reply || 'Je n\'ai pas pu formuler de réponse. Contactez-nous au 06 12 34 56 78.';
            history.push({ role: 'user', content: message });
            history.push({ role: 'assistant', content: reply });
            saveHistory();
            appendBubble('assistant', formatReply(reply));
        } catch (_) {
            hideTyping();
            appendBubble('assistant', formatReply('Connexion impossible. Vérifiez votre réseau ou contactez-nous au 06 12 34 56 78.'));
        } finally {
            isSending = false;
            chatSend.disabled = false;
            chatInput.focus();
        }
    }

    renderFromHistory();

    chatLauncher?.addEventListener('click', openChat);
    chatTeaser?.addEventListener('click', openChat);
    chatLauncher?.addEventListener('keydown', (e) => {
        if (e.key === 'Enter' || e.key === ' ') {
            e.preventDefault();
            openChat();
        }
    });

    teaserClose?.addEventListener('click', (e) => {
        e.stopPropagation();
        if (chatTeaser) chatTeaser.style.display = 'none';
    });

    chatClose?.addEventListener('click', closeChat);
    chatSend?.addEventListener('click', () => sendMessage());
    chatInput.addEventListener('keydown', (e) => {
        if (e.key === 'Enter') {
            e.preventDefault();
            sendMessage();
        }
    });
})();
