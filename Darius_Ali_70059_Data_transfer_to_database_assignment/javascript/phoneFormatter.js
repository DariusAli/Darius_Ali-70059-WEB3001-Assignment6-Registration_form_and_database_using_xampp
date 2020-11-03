$(window).load(function()
{
   var phones = [{ "mask": "#-###-###-####"}, { "mask": "#-###-###-####"}];
    $('#P1_contact').inputmask({ 
        mask: phones, 
        greedy: false, 
        definitions: { '#': { validator: "[0-9]", cardinality: 1}} });

    $('#P2_contact').inputmask({
        mask: phones,
        greedy: false,
        definitions: { '#': {validator: "[0-9]", cardinality: 1}}});
});