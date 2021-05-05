//
//  ViewController.swift
//  m5_hw_6_judge
//
//  Created by 楊振東 on 2021/4/13.
//

import UIKit

class ViewController: UIViewController {

    override func viewDidLoad() {
        super.viewDidLoad()
        var number = 2
        var guessNumber = 55
        var a :[Int] =  [1,2,3]
        var b :[Int] = [11,12,13]
        for i in 0...2 {
            if number == a[i] {
            }
            print("\(number)在範圍內")
            else {
                print("\(number)不在範圍內")
            }
        }
        
    }


}

