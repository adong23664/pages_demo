//
//  ViewController.swift
//  practice_tree
//
//  Created by 楊振東 on 2021/4/11.
//

import UIKit

class ViewController: UIViewController {

    override func viewDidLoad() {
        super.viewDidLoad()
        print("============金字塔============")
        for i in 0 ..< 5 {
            // print space
            for i in stride(from: 5 - 1, to: i, by: -1) {
                print("", terminator: " ")
            }
            // print star
            for i in 0 ..< (i * 2) + 1 {
                print("", terminator: "*")
            }
            print("")
        }

    }
}

