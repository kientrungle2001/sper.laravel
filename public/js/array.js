function buildCategoryTree(arr) {
    var indexedTree = {};
    arr.forEach(function (item) {
        indexedTree[item.categoryid] = item;
    });
    var roots = [];
    arr.forEach(function (item) {
        if (parseInt(item['parentid']) !== 0) {
            if (typeof indexedTree[item['parentid']] !== 'undefined') {
                if (typeof indexedTree[item['parentid']]['children'] === 'undefined') {
                    indexedTree[item['parentid']]['children'] = [];
                }
                indexedTree[item['parentid']]['children'].push(item);
            } else {
                roots.push(item);
            }
        } else {
            roots.push(item);
        }
    });
    return roots;
}