$(function(){

    function isFloat(n){
        return Number(n) === n && n % 1 !== 0;
    }

    $("button[name='enter']").on('click',function(e){
        e.preventDefault();

        const SUM = '+'
            ,SUB = '-'
            ,MULTI = '*'
            ,DIV = '/'
            ,COMMENT = 'ввод данных не соответствует формату'
            ,COMMENT2 = 'на ноль делить нельзя';
        let result
            ,operand1
            ,operandFload1
            ,operator
            ,operand2
            ,operandFload2
            ,val
            ,regexp
            ,arr;

        val = $('#val').val();
        regexp = /^(\d+)(\.\d+)?(\+|\-|\*|\/)(\d+)(\.\d+)?$/;
        arr = val.match(regexp);
        if(arr) {
            operator = arr[3];
            operandFload1 = arr[2];
            operandFload2 = arr[5];
            if (operandFload1) {
                operand1 = Number(arr[1] + arr[2]);
            } else {
                operand1 = Number(arr[1]);
            }
            if (operandFload2) {
                operand2 = Number(arr[4] + arr[5]);
            } else {
                operand2 = Number(arr[4]);
            }
            switch (operator) {
                case SUM:
                    result = operand1 + operand2;
                    break;
                case SUB:
                    result = operand1 - operand2;
                    break;
                case MULTI:
                    result = operand1 * operand2;
                    break;
                case DIV:
                    result = operand1 / operand2;
                    if (operand2 === 0) {
                        result = COMMENT2;
                        $('#result').addClass('error');
                        $('#result').hide().html(result).fadeIn(500);
                        return;
                    }
                    break;
            }
            if (isFloat(result)) {
                result = Number(result).toFixed(5);
            } else {
                result = Number(result);
            }
            $('#result').removeClass('error');
        }else{
            result = COMMENT;
            $('#result').addClass('error');
        }
        $('#result').hide().html(result).fadeIn(500);
    });
});