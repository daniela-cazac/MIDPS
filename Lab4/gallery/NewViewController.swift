
import UIKit

class NewViewController: UIViewController,UIScrollViewDelegate {

    @IBOutlet weak var imageView: UIImageView!
    
    @IBOutlet weak var scrollView: UIScrollView!
    var image = UIImage()
    
    override func viewDidLoad() {
        super.viewDidLoad()
        
        self.imageView.image = self.image
        scrollView.addSubview(imageView)
        scrollView.contentSize = (imageView?.frame.size)!
        self.scrollView.minimumZoomScale = 0.3
        self.scrollView.maximumZoomScale = 100
        
        
    }

    override func didReceiveMemoryWarning() {
        super.didReceiveMemoryWarning()
        // Dispose of any resources that can be recreated.
    }
    

    /*
    // MARK: - Navigation

    // In a storyboard-based application, you will often want to do a little preparation before navigation
    override func prepare(for segue: UIStoryboardSegue, sender: Any?) {
        // Get the new view controller using segue.destinationViewController.
        // Pass the selected object to the new view controller.
    }
    */
    func viewForZooming(in scrollView: UIScrollView) -> UIView? {
        return self.imageView
    }

}
