let mobileUtil;
mobileUtil = (selector, script) => {
    let phone = document.querySelector(selector);
    window.intlTelInput(phone, {
        allowDropdown: true,
        autoHideDialCode: true,
        autoPlaceholder: "on",
        dropdownContainer: document.body,
        initialCountry: "BD",
        formatOnDisplay: true,
        hiddenInput: "phone",
        nationalMode: true,
        placeholderNumberType: "MOBILE",
        separateDialCode: true,
        utilsScript: script,
    });
}

