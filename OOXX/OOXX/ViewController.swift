import UIKit
enum TheStateOfButton {
    case N, X, O
}
class ViewController: UIViewController {
    
    func theNewGame () {
        print("新的ㄧ局")
        theNewGameLogic ()
        theNewGameUI ()
    }
    var theStatesOfBtns : [ TheStateOfButton  ]! = [ ]
    var theWhoseHand : TheStateOfButton!
    func theDisplayLogicStatus () {
        for index in 0..<9 {
            let stateString : String = "\(theStatesOfBtns[ index ])"
            let numberOfBlanks = 5 - stateString.count
            for _ in 0..<numberOfBlanks {  print( " " , terminator:"" )  }
            print( stateString,  terminator:"" )
            if index % 3 == 2 {
                print()
            }
        }
        print()
        print("該 \(theWhoseHand!) 先")
    }
    func theNewGameLogic () {
        print()
        print()
        print("{")
        print("新的ㄧ局 邏輯開始: ")
        print()
        theStatesOfBtns = [ ]
        for _ in 1...9 {
            theStatesOfBtns.append( .N )
        }
        theWhoseHand = .X
        print("新的ㄧ局的九個按鈕的狀態(包含 whoseHand)如下")
        theDisplayLogicStatus ()
        
        print()
        print("新的ㄧ局 邏輯完成")
        print("}")
        print()
    }
    
    var theButtons : [ UIButton ]! = [ ]
    let theWidth : Int = 50
    let theHeight : Int = 50
    func theNewGameUI2clearButtons () {
        for eb : UIButton in theButtons {
            eb.removeFromSuperview()
        }
    }
    func theNewGameUI () {
        print()
        print("{")
        print("新的ㄧ局 UI開始: ")
        print()
        theNewGameUI2clearButtons ()
        print("新的ㄧ局 UI  清掉 view       所有 9 個 UIButton(s) ")
        theButtons = []
        print("新的ㄧ局 UI  清掉 theButtons 所有 9 個 UIButton(s) ")
        print()
        
        navigationItem.title = "新的ㄧ局 \(theWhoseHand!) 先"
        for index in 0..<theStatesOfBtns.count {
            let btn = UIButton()
            let columnIndex = index % 3
            let rowIndex = index / 3
            print("(\(rowIndex) 排, \(columnIndex) 欄)", terminator: "" )
            if index % 3 == 2 {
                print()
            }
            
            btn.setTitleColor(UIColor.black, for: .normal)
            btn.backgroundColor = .yellow
            btn.setTitle( "\(theStatesOfBtns[ index ])" , for: .normal)
            btn.frame = CGRect(
                x: theWidth*( columnIndex + 1 )
                , y: theHeight*( rowIndex + 2 )
                , width: theWidth, height: theHeight)
            
            btn.addTarget( self , action: #selector( theIba(_:) ), for: .touchUpInside )
            view.addSubview( btn )
            
            theButtons.append( btn )
        }
        
        print()
        print("新的ㄧ局 UI完成")
        print("}")
        print()
        print()
    }
    @objc
    func theIba( _ sender : UIButton ) {
        
        guard let hand = theWhoseHand else {
            theWhoseHand = .X
            navigationItem.title = "該 \(theWhoseHand!) 先"
            return
        }
        print()
        if let row_column_tuple = theRowColumnTuple(btnGiven: sender) {
            print(
    "(第 \(row_column_tuple.row) 排, 第 \(row_column_tuple.column) 欄)"
            )
            theStatesOfBtns [ 3*(row_column_tuple.row) + row_column_tuple.column ] = theWhoseHand
            
            if theWinAt(row: row_column_tuple.row, column: row_column_tuple.column) != nil
            {
                let alert = UIAlertController(title: "\(self.theWhoseHand!) 贏了", message: "看完按Ok來玩新的ㄧ局", preferredStyle: .actionSheet)
                let act = UIAlertAction(title: "Ok", style: .default) { (atn) in
                    alert.dismiss(animated: true, completion: nil)
                    self.theNewGame()
                }
                alert.addAction(act)
                self.present(alert, animated: true, completion: nil)
                
            } else {
                var tie : Bool = true
                for es in theStatesOfBtns {
                    if es == .N {
                        tie = false
                    }
                }
                if tie {
                    let alert = UIAlertController(title: "平手", message: "看完按Ok來玩新的ㄧ局", preferredStyle: .actionSheet)
                    let act = UIAlertAction(title: "Ok", style: .default) { (atn) in
                        alert.dismiss(animated: true, completion: nil)
                        self.theNewGame()
                    }
                    alert.addAction(act)
                    self.present(alert, animated: true, completion: nil)
                }
            }
            
        } else {
            print( "找不出來是第 幾 排, 第 幾 欄" )
        }
        
        
        sender.isEnabled = false
        sender.setTitle("\(hand)" , for: .normal)
        theWhoseHand = hand == .X ? .O : .X
        theDisplayLogicStatus ()
        navigationItem.title = "該 \(theWhoseHand!) 先"
    }
    func theWinAt ( row  :Int , column  :Int  ) -> Bool?
    {
        var answer :  Bool?
        for 第幾排 in 0..<3 {
            if ( theStatesOfBtns [ 3*第幾排+0 ] != .N
                && theStatesOfBtns [ 3*第幾排+0 ] == theStatesOfBtns [ 3*第幾排+1 ])
                && (theStatesOfBtns [ 3*第幾排+1 ] == theStatesOfBtns [ 3*第幾排+2 ]) {
                answer = true
                return answer
            }
        }
        for 第幾欄 in 0..<3 {
            if ( theStatesOfBtns [ 第幾欄+3*0 ] != .N
                && theStatesOfBtns [ 第幾欄+3*0 ] == theStatesOfBtns [ 第幾欄+3*1 ])
                && (theStatesOfBtns [ 第幾欄+3*1 ] == theStatesOfBtns [ 第幾欄+3*2 ]) {
                answer = true
                return answer
            }
        }
        if ( theStatesOfBtns [ 3*0+0 ] != .N
            && theStatesOfBtns [ 3*0+0 ] == theStatesOfBtns [ 3*1+1 ])
            && (theStatesOfBtns [ 3*1+1 ] == theStatesOfBtns [ 3*2+2 ]) {
            answer = true
            return answer
        }
        if ( theStatesOfBtns [ 3*0+2 ] != .N
            && theStatesOfBtns [ 3*1+1 ] == theStatesOfBtns [ 3*0+2 ])
            && (theStatesOfBtns [ 3*1+1 ] == theStatesOfBtns [ 3*2+0 ]) {
            answer = true
            return answer
        }
        return answer
    }
    func theRowColumnTuple ( btnGiven : UIButton ) -> ( row :Int , column :Int )?
    {
        var answer : ( row :Int , column :Int )?
 
        for index in 0...theButtons.count {
            if theButtons [ index ] === btnGiven {
                answer = theRowColumn( indexGiven : index  )
                break
            }
        }
        return answer
    }
    func theRowColumn ( indexGiven : Int ) -> ( row :Int , column :Int )
    {
        var answer : ( row :Int , column :Int )
        answer = ( indexGiven / 3 , indexGiven % 3    )
        return answer
    }
    override func viewDidLoad() {
        super.viewDidLoad()
        
        theNewGame ()
        
        
    }
 
 
}



