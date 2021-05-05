//
//  ViewController.swift
//  Nine-Nine Multiplication Table
//
//  Created by 楊振東 on 2021/4/11.
//

import UIKit

class ViewController: UIViewController {

    override func viewDidLoad() {
        super.viewDidLoad()
        for i in 1...9 {
            for j in 1...9 {
                print(String(format: "%d*%d=%2d ", j, i , j*i), terminator: "")
            }
        }
    }


}

