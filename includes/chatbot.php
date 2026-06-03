<link rel="stylesheet" href="style/chat-agent.css">

<div id="chatbot-container">
    <div class="chat-teaser" id="chat-teaser">
        Besoin d'aide ? 👋
        <button type="button" class="teaser-close-btn" id="teaser-close" aria-label="Fermer l'accroche">×</button>
    </div>

    <div class="chat-bubble-launcher shadow" id="chat-launcher" role="button" tabindex="0" aria-label="Ouvrir le chat">
        <i class="bi bi-chat-dots-fill"></i>
        <span class="chat-badge">1</span>
    </div>

    <div class="chat-popup-window shadow-lg d-none" id="chat-window" role="dialog" aria-label="Assistant TopTop Clean">
        <div class="chat-header-custom">
            <div class="header-info">
                <img src="image/cart2.png" alt="Diarra" class="header-avatar">
                <div class="header-text-block">
                    <h6 class="text-white mb-0">Diarra</h6>
                    <small class="text-white-50">Agent TopTop_Clean</small>
                </div>
            </div>
            <button type="button" class="btn-close-header" id="chat-close" aria-label="Fermer le chat">×</button>
        </div>

        <div class="chat-messages-area" id="chat-messages"></div>

        <div class="chat-input-footer">
            <input type="text" id="chat-input" placeholder="Écrivez votre message…" class="form-control border-0 bg-light" autocomplete="off" maxlength="800">
            <button type="button" class="send-msg-btn" id="chat-send" aria-label="Envoyer"><i class="bi bi-send-fill"></i></button>
        </div>
    </div>
</div>

<script src="assets/js/chat-agent.js" defer></script>
