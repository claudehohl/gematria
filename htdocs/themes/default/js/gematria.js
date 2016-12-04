$(function() {
    // updateclick
    $('.updateclick').on('click', function() {
        var params = get_url_vars();
        console.debug(params);
        var id = $(this).parents('tr').data('id');
        params.edit = id
        window.location.href = construct_urlparams(params);
    });

    var alphabet = {
        aleph: 'א',
        bet: 'ב',
        gimel: 'ג',
        dalet: 'ד',
        he: 'ה',
        vav: 'ו',
        zayin: 'ז',
        chet: 'ח',
        tet: 'ט',
        jod: 'י',
        kaf: 'כ',
        lamed: 'ל',
        mem: 'מ',
        nun: 'נ',
        samech: 'ס',
        ayin: 'ע',
        pe: 'פ',
        tsadi: 'צ',
        qof: 'ק',
        resch: 'ר',
        shin: 'ש',
        tav: 'ת'
    };

    var letters = [];
    for (key in alphabet) {
        letters.push({
            name: key,
            content: alphabet[key]
        });
    }

    // autocomplete hebrew types
    $('.hebrew').atwho({
        at: ':',
        data: letters,
        displayTpl: '<li>${content} <small>${name}</small></li>',
        insertTpl: '${content}'
    });
});

function get_url_vars() {
    var vars = {};
    if (window.location.href.indexOf('?') > -1) {
        var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
        for (var i = 0; i < hashes.length; i++) {
            hash = hashes[i].split('=');
            vars[hash[0]] = hash[1];
        }
    }
    return vars;
}

function construct_urlparams(obj) {
    var block = [];
    for (var key in obj) {
        block.push(key + '=' + obj[key]);
    }
    return '?' + block.join('&');
}

$('.btn-danger').click(function() {
    return confirm('Sicher?');
});
