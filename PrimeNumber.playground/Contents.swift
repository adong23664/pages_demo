import UIKit

func prime(num : Int) {
var isPreimNum = true
for item in 2...num {
    for j in 2..<item {
        if item % j == 0 {
            isPreimNum = false
            break
        }

    }
    if isPreimNum {
        print(item , terminator:" ")
    }
    isPreimNum = true
}
}

prime(num: 1000)
