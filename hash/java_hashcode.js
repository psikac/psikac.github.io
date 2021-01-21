//Preuzeto sa https://github.com/artem0/canvas-fingerprinting
function javaHashCode(string, K) {
    var hash = 0;
    if (string.length === 0) {
        return hash;
    }
    for (var i = 0; i < string.length; i++) {
        char = string.charCodeAt(i);
        hash = K*((hash<<5)-hash)+char;
        hash = hash & hash;
    }
    return hash;
}