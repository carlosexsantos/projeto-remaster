// moment.js locale configuration
// locale : brazilian portuguese (pt-br)
// author : Caio Ribeiro Pereira : https://github.com/caio-ribeiro-pereira

(function (factory) {
    if (typeof define === 'function' && define.amd) {
        define(['moment'], factory); // AMD
    } else if (typeof exports === 'object') {
        module.exports = factory(require('../moment')); // Node
    } else {
        factory(window.moment); // Browser global
    }
}(function (moment) {
    return moment.defineLocale('pt-BR', {
        months : 'Janeiro_Fevereiro_Marco_Abril_Maio_Junho_Julho_Agosto_Setembro_Outubro_Novembro_Dezembro'.split('_'),
        monthsShort : 'Jan_Fev_Mar_Abr_Mai_Jun_Jul_Ago_Set_Out_Nov_Dez'.split('_'),
        weekdays : 'Domingo_Segunda-Feira_Ter&ccedil;a-Feira_Quarta-Feira_Quinta-Feira_Sexta-Feira_S&aacute;bado'.split('_'),
        weekdaysShort : 'Dom_Teg_Ter_Qua_Qui_Sex_S�b'.split('_'),
        weekdaysMin : 'Do_Se_Te_Qu_Qu_Se_Sa'.split('_'),
        longDateFormat : {
            LT : 'HH:mm',
            L : 'DD/MM/YYYY',
            LL : 'D [de] MMMM [de] YYYY',
            LLL : 'D [de] MMMM [de] YYYY [�s] LT',
            LLLL : 'dddd, D [de] MMMM [de] YYYY [�s] LT'
        },
        calendar : {
            sameDay: '[Hoje �s] LT',
            nextDay: '[Amanh� �s] LT',
            nextWeek: 'dddd [�s] LT',
            lastDay: '[Ontem �s] LT',
            lastWeek: function () {
                return (this.day() === 0 || this.day() === 6) ?
                    '[�ltimo] dddd [�s] LT' : // Saturday + Sunday
                    '[�ltima] dddd [�s] LT'; // Monday - Friday
            },
            sameElse: 'L'
        },
        relativeTime : {
            future : 'em %s',
            past : '%s atr�s',
            s : 'segundos',
            m : 'um minuto',
            mm : '%d minutos',
            h : 'uma hora',
            hh : '%d horas',
            d : 'um dia',
            dd : '%d dias',
            M : 'um m�s',
            MM : '%d meses',
            y : 'um ano',
            yy : '%d anos'
        },
        ordinal : '%d�'
    });
}));