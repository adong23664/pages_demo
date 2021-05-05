//
//  ViewController.swift
//  m5_hw_7
//
//  Created by 楊振東 on 2021/4/13.
//

import UIKit

class ViewController: UIViewController {

    override func viewDidLoad() {
        super.viewDidLoad()
        var num : [Int] = []
    
        for i in 6...15 {
            for j in 2...i-1 {
                if i % j == 0 {
                    num.append(i)
                }
            }
        }
        print("\(num[0])最小，而且又不是質樹")
    }


}

