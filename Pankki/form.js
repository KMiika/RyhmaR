function showLanguage()
{
    var language = document.getElementById('language');
    var selectedLanguage = language.options[language.selectedIndex].text;
    document.getElementById('selected_language').value = selectedLanguage;
}

function showPhone(phone)
{
    document.getElementById('selected_phone').value = phone;
}