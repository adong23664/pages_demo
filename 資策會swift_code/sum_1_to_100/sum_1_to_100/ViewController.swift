//
//  ViewController.swift
//  sum_1_to_100
//
//  Created by 楊振東 on 2021/4/11.
//

import UIKit

class ViewController: UIViewController {

    override func viewDidLoad() {
        super.viewDidLoad()
        var n = 100
        var sum = 0
        for i in 1...n {
            sum += i
        }
        print(sum)
    }


}

