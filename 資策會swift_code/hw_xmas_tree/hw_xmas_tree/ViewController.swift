//
//  ViewController.swift
//  hw_xmas_tree
//
//  Created by 楊振東 on 2021/4/13.
//

import UIKit

class ViewController: UIViewController {
    class func the畫 (幾個 howmany : Int, 什麼 what : String) {
        if howmany < 1 {
            return
        }
        for cs in 1...howmany {
            print(what ,terminator : "")
        }
    }
    override func viewDidLoad() {
        super.viewDidLoad()
       let 幾層 = 12
       var 幾個空白 = 幾層-1
       let 空白 = " "
       var 幾個葉子 = 1
       let 葉子 = "^"
       let 幾個換行 = 1
       let 換行 = "\n"
       
        for _ in 1...幾層 {
            ViewController.the畫(幾個: 幾個空白, 什麼: 空白)
            ViewController.the畫(幾個: 幾個葉子, 什麼: 葉子)
            ViewController.the畫(幾個: 幾個換行, 什麼: 換行)
            幾個空白 -= 1
            幾個葉子 += 2
        }
    }


}

