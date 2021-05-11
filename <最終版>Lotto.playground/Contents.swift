import UIKit
func lotto() {
var lotto1 : Set<Int> = []
var num = Int(arc4random()) % 49 + 1
for i in 1...6 {
    lotto1.insert(num)
    if lotto1.count <= 5 {
        num = Int(arc4random()) % 49 + 1
        lotto1.insert(num)
    }
}
    var lotto2 = Array(lotto1.sorted())
    print(lotto2)
    
}

lotto()
