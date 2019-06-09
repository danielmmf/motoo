self.onmessage = function(e) {

    var obj = e.data;

    if(obj.done == false) {
        obj.val = 2;
    } else {
        obj.val = 4;
    }

    self.postMessage(obj);

}