const CommonModule = (function () {
    function isValidEmail(email) {
        var pattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
        return pattern.test(email);
    }

    function isValidPhoneNumber(phoneNumber) {
        const pattern = /^(09|03|07|08|05|01[2|6|8|9])\d{8}$/;
        return pattern.test(phoneNumber);
    }
    function isNumber(value) {
        return typeof value === 'number' && !isNaN(value) ||
            typeof value === 'string' && value.trim() !== '' && !isNaN(parseFloat(value));
    }
    function isValidPassword(password) {
        const passwordPattern = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$#!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;
        return passwordPattern.test(password);
    }
    function checkLenghtPassword(password) {
        // return password.length() >= 8 ? true : false;
    }
    function checkUpperPassword(password) {
        // return /[A-Z]/.test(password) ? true : false;
    }
    function checkNumberPassword(password) {
        // return /\d/.test(inputText) ? true : false;
    }
    function showToast(title, message, classType = 'info') {
        $.suiAlert({
            title: title,
            description: message,
            type: classType,
            time: '2',
            position: 'top-right',
        });
    }
    function getCookie(name) {
        const value = `; ${document.cookie}`;
        const parts = value.split(`; ${name}=`);
        if (parts.length === 2) return parts.pop().split(';').shift();
        return null;
    }
    function isValidTaxCode(taxCode) {
        return /^\d{10}$|^\d{10}-\d{3}$/.test(taxCode);
    }
    function getParameterByName(name) {
        const url = window.location.href;
        const regex = new RegExp('[?&]' + name + '=([^&#]*)', 'i');
        const results = regex.exec(url);
        return results ? decodeURIComponent(results[1]) : null;
    }

    function getParameterUrlByName(name, url) {
        if (url.indexOf('Users/Login?returnUrl') === -1)
            return url;
        const regex = new RegExp('[?&]' + name + '=([^&#]*)', 'i');
        const results = regex.exec(url);
        return results ? decodeURIComponent(results[1]) : null;
    }

    function formatDate(date) {
        var year = date.getFullYear();
        var month = String(date.getMonth() + 1).padStart(2, '0');
        var day = String(date.getDate()).padStart(2, '0');

        return year + '-' + month + '-' + day;
    }

    function isLoggedIn() {
        return !($(".user-sign-in").css('display') === 'none');
    }

    function isLoggedInMobile() {
        return !($("#login-button").css('display') === 'none');
    }

    function SearchTextDictionary(textInput) {
        if (textInput) {
            //var scanning = DictionaryShoryKeyword.find(k => k.value.toLowerCase().includes(textInput.toLowerCase().trim()));
            for (var item in DictionaryShoryKeyword) {
                if (textInput.toLowerCase().trim().includes(DictionaryShoryKeyword[item].value.toLowerCase()))
                    return textInput;
            }

            textInput = textInput.toLowerCase();
            textInput = textInput.trim();
            let firstKey = textInput.substring(0, 1);
            let remainContent = textInput.substring(1);
            if (remainContent) {
                remainContent = remainContent.trim();
                /* if (remainContent.indexOf('q') !== -1 || )*/
            }
            let keywordObj = DictionaryShoryKeyword.find(k => k.key === firstKey);
            if (keywordObj) {
                return (keywordObj.value + " " + remainContent).trim();
            }
            return textInput;
        }
    }

    const getFriendlyUrl = function (input) {
        const removeDiacritics = (str) => {
            const diacriticsMap = [
                { base: 'a', letters: /[àáạảãâầấậẩẫăằắặẳẵ]/g },
                { base: 'e', letters: /[èéẹẻẽêềếệểễ]/g },
                { base: 'i', letters: /[ìíịỉĩ]/g },
                { base: 'o', letters: /[òóọỏõôồốộổỗơờớợởỡ]/g },
                { base: 'u', letters: /[ùúụủũưừứựửữ]/g },
                { base: 'y', letters: /[ỳýỵỷỹ]/g },
                { base: 'd', letters: /[đ]/g },
                { base: 'A', letters: /[ÀÁẠẢÃÂẦẤẬẨẪĂẰẮẶẲẴ]/g },
                { base: 'E', letters: /[ÈÉẸẺẼÊỀẾỆỂỄ]/g },
                { base: 'I', letters: /[ÌÍỊỈĨ]/g },
                { base: 'O', letters: /[ÒÓỌỎÕÔỒỐỘỔỖƠỜỚỢỞỠ]/g },
                { base: 'U', letters: /[ÙÚỤỦŨƯỪỨỰỬỮ]/g },
                { base: 'Y', letters: /[ỲÝỴỶỸ]/g },
                { base: 'D', letters: /[Đ]/g },
                { base: 'm', letters: /[㎡]/g },
            ];
            for (let i = 0; i < diacriticsMap.length; i++) {
                str = str.replace(diacriticsMap[i].letters, diacriticsMap[i].base);
            }
            return str;
        };

        let result = input.toLowerCase();
        result = removeDiacritics(result);
        result = result.replace(/_/g, '-');
        result = result.replace(/\s+/g, '-');
        result = result.replace(/[^\w\s-]/g, '');
        result = result.substring(0, 100);
        result = result.replace(/^-+|-+$/g, '');
        result = result.replace(/-{2,}/g, '-');

        return result;
    };

    function isContentValid(content, blacklist) {
        const normalizedContent = ' ' + content.replaceAll('+', ' cộng').replace(/[:;'"|,.~!@#$%^&*_=-]/g, ' ').toLowerCase() + ' '; // Chuẩn hóa nội dung thành chữ thường
        // Kiểm tra từng từ trong danh sách đen bằng RegExp
        for (let word of blacklist) {
            let mormalWord = word.toLowerCase();
            const regex = new RegExp(`\\s${mormalWord.replaceAll('.', '').replaceAll('+', ' cộng')}\\s`, "gi"); // Kiểm tra từ độc lập
            if (regex.test(normalizedContent)) {
                return { isValid: false, blacklistedWord: mormalWord };
            }
        }
        return { isValid: true };
    }

    function removeNonAsciiFormatString(str) {
        str = str.toLowerCase();
        str = str.replace(/à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ/g, "a");
        str = str.replace(/è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ/g, "e");
        str = str.replace(/ì|í|ị|ỉ|ĩ/g, "i");
        str = str.replace(/ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ/g, "o");
        str = str.replace(/ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ/g, "u");
        str = str.replace(/ỳ|ý|ỵ|ỷ|ỹ/g, "y");
        str = str.replace(/đ/g, "d");
        return str;
    }

    function isAsciiString(text) {
        let isAscii = true;
        if (text && !text.match(/^[\x00-\x7F]+$/g)) {
            isAscii = false;
        }
        return isAscii;
    }

    function highlightSearchTerm(text, term) {
        const regex = new RegExp(`(${term})`, "gi");
        return text.replace(regex, "<strong>$1</strong>");
    };

    function shuffle(array) {
        let currentIndex = array.length;

        // While there remain elements to shuffle...
        while (currentIndex != 0) {

            // Pick a remaining element...
            let randomIndex = Math.floor(Math.random() * currentIndex);
            currentIndex--;

            // And swap it with the current element.
            [array[currentIndex], array[randomIndex]] = [
                array[randomIndex], array[currentIndex]];
        }
    }
    function formatMoney(amount, decimalCount = 0, decimal = ",", thousands = ".") {
        try {
            decimalCount = Math.abs(decimalCount);
            decimalCount = isNaN(decimalCount) ? 2 : decimalCount;

            const negativeSign = amount < 0 ? "-" : "";

            let i = parseInt(amount = Math.abs(Number(amount) || 0).toFixed(decimalCount)).toString();
            let j = (i.length > 3) ? i.length % 3 : 0;

            return negativeSign +
                (j ? i.substr(0, j) + thousands : '') +
                i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + thousands) +
                (decimalCount ? decimal + Math.abs(amount - i).toFixed(decimalCount).slice(2) : "");
        } catch (e) {
            console.log(e)
        }
    };

    function isEmpty(obj) {
        for (const prop in obj) {
            if (Object.hasOwn(obj, prop)) {
                return false;
            }
        }

        return true;
    }

    var DictionaryShoryKeyword =
        [
            { key: "p", value: "phường" },
            { key: "q", value: "quận" },
            { key: "h", value: "huyện" },
            { key: "d", value: "dự" },
            { key: "đ", value: "đường" },
            { key: "p", value: "phuong" },
            { key: "q", value: "quan" },
            { key: "h", value: "huyen" },
            { key: "d", value: "du" },
            { key: "đ", value: "duong" },
            { key: "phú", value: "phú nhuận" },
            { key: "phu", value: "phu nhuan" }
        ];

    function inputNumberOnly(strNumber) {
        if (strNumber.toString() == '0') return null;
        return strNumber.toString().replace(/[^0-9]/g, '');
    }
    function formatNumberWithCommas(num) {
        if (num) return num.toString().replaceAll('.', '').replace(/\B(?=(\d{3})+(?!\d))/g, ".");
    }
    function countCharacters(elmId, value, maxLength = 100) {
        var charCount = value?.trim().length;
        var text = charCount ? `${charCount}/${maxLength}` : '';
        $(elmId).text(text);
    };

    function replaceMultipleSpaces(inputString) {
        return inputString.replace(/ +/g, ' ').trim();
    }
    function replaceLastFourInPhoneNumbers(inputString) {
        return inputString.replace(/(\d{4}[\s]?(\d{3})[\s]?(\d{3}))/g, function (match) {
            return match.replace(/(\d{3})$/, '***');
        }).replace(/(\d{3}[\s]?(\d{3})[\s]?(\d{4}))/g, function (match) {
            return match.replace(/(\d{3})$/, '***');
        }).replace(/(\d{4}[\s]?(\d{2})[\s]?(\d{4}))/g, function (match) {
            return match.replace(/(\d{3})$/, '***');
        });
    }
    function replaceFirstFourCharsInEmail(inputString) {
        return inputString.replace(/([a-zA-Z0-9._%+-]{4})([a-zA-Z0-9._%+-]*@[\w.-]+)/g, function (match, p1, p2) {
            return '****' + p2;
        });
    }

    function applyTitlePolicy(inputString) {
        return replaceFirstFourCharsInEmail(replaceLastFourInPhoneNumbers(replaceMultipleSpaces(inputString)));
    }
    function resizeImage(file) {
        const MAX_WIDTH = 1024;
        const MAX_HEIGHT = 1024;
        return new Promise((resolve) => {
            const reader = new FileReader();
            reader.readAsDataURL(file);

            reader.onload = function (event) {
                const img = new Image();
                img.src = event.target.result;
                img.onload = function () {
                    const canvas = document.createElement("canvas");
                    const ctx = canvas.getContext("2d");

                    let width = img.width;
                    let height = img.height;
                    const scale = Math.min(MAX_WIDTH / width, MAX_HEIGHT / height);

                    if (scale < 1) {
                        width *= scale;
                        height *= scale;
                    }

                    canvas.width = width;
                    canvas.height = height;
                    ctx.drawImage(img, 0, 0, width, height);

                    canvas.toBlob((blob) => {
                        const newFile = new File([blob], file.name, { type: "image/jpeg" });
                        resolve(newFile);
                    }, "image/jpeg", 0.7);
                };
            };
        });
    }
    function formatDateVN(date) {
        var year = date.getFullYear();
        var month = String(date.getMonth() + 1).padStart(2, '0');
        var day = String(date.getDate()).padStart(2, '0');

        return day + '/' + month + '/' + year;
    }
    function formatCurrency(amount) {
        if (isNaN(amount)) return "";
        return amount.toFixed(0).replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    }

    //Hàm delay xử lý sau khi thực hiện event
    function debounce(fn, delay) {
        let timer = null;
        return function (...args) {
            clearTimeout(timer);
            timer = setTimeout(() => fn.apply(this, args), delay);
        };
    }

    function formatArea(input) {
        return input.replace(/\s+/g, '').replace('²', '2');
    }
    function formatPrice(input) {
        return input
            .replace(/\s+/g, '-')
            .replace(',', '.')
            .replace('tỷ', 'ty')
            .replace('triệu', 'trieu');
    }
    function formatPriceProject(input) {
        return input
            .replace(/\s+/g, '-')
            .replace(',', '.')
            .replace('tỷ', 'ty')
            .replace('triệu', 'trieu')
            .replace('²', '2');;
    }
    function splitTime(minutes = 0) {
        if (minutes < 60) {
            return `${Math.floor(minutes)} phút`;
        } else {
            return `${Math.floor(minutes / 60)} giờ`;
        }
    }
    function getUrlParameter(name) {
        const urlParams = new URLSearchParams(window.location.search);
        return urlParams.get(name);
    }

    function groupByToMap(array, keyFn) {
        const map = new Map();
        array.forEach(item => {
            const key = keyFn(item);
            if (!map.has(key)) map.set(key, []);
            map.get(key).push(item);
        });
        return map;
    }

    function convertDateTime(input) {
        const d = new Date(input);
        const pad = n => n.toString().padStart(2, '0');

        const hh = pad(d.getHours());
        const mm = pad(d.getMinutes());
        const dd = d.getDate();
        const MM = d.getMonth() + 1;
        const yyyy = d.getFullYear();

        return `${hh}:${mm}, ${dd}/${MM}/${yyyy}`;
    }

    return {
        isValidEmail,
        isValidPhoneNumber,
        isNumber,
        isValidPassword,
        showToast,
        getCookie,
        checkLenghtPassword,
        checkUpperPassword,
        checkNumberPassword,
        isValidTaxCode,
        getParameterByName,
        formatDate,
        isLoggedIn,
        isLoggedInMobile,
        SearchTextDictionary,
        removeNonAsciiFormatString,
        isAsciiString,
        getFriendlyUrl,
        isContentValid,
        highlightSearchTerm,
        shuffle,
        formatMoney,
        getParameterUrlByName,
        isEmpty,
        inputNumberOnly,
        formatNumberWithCommas,
        countCharacters,
        replaceMultipleSpaces,
        replaceLastFourInPhoneNumbers,
        replaceFirstFourCharsInEmail,
        applyTitlePolicy,
        resizeImage,
        formatDateVN,
        formatCurrency,
        debounce,
        formatArea,
        formatPrice,
        formatPriceProject,
        splitTime,
        getUrlParameter,
        groupByToMap,
        convertDateTime
    };
})();

window.CommonModule = CommonModule;

export default CommonModule;