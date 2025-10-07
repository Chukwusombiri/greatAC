<div class="flex items-center space-x-2">
    <label for="languageSwitcher" class="text-sm text-gray-600">Language:</label>
    <select
        id="languageSwitcher"
        class="border border-gray-300 rounded px-3 py-2 text-sm focus:outline-none focus:ring focus:border-blue-400"
    >
        <option value="">Select</option>
        <option value="en">English</option>
        <option value="fr">French</option>
        <option value="de">German</option>
        <option value="es">Spanish</option>
        <option value="zh-CN">Chinese (Simplified)</option>
    </select>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const select = document.getElementById('languageSwitcher');

        // Load saved language from localStorage
        const savedLang = localStorage.getItem('preferredLang');
        if (savedLang) {
            select.value = savedLang;
        }

        select.addEventListener('change', function() {
            const lang = this.value;

            // Save selected language
            localStorage.setItem('preferredLang', lang);

            if (lang !== '') {
                const currentUrl = window.location.href;
                const translateUrl = `https://translate.google.com/translate?hl=${lang}&sl=auto&tl=${lang}&u=${encodeURIComponent(currentUrl)}`;
                window.location.href = translateUrl;
            }
        });
    });
</script>
