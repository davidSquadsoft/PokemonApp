function fitsInOneBox(boxes) {
    // Check if box1 fits into box2
    function fits(box1, box2) {
      return box1.l < box2.l && box1.w < box2.w && box1.h < box2.h;
    }
  
    // Recursive function to fit boxes into each other
    function fitBoxes(remainingBoxes, fittedBoxes) {
      // Base case: only one box left
      if (remainingBoxes.length === 1) {
        return true;
      }
  
      for (let i = 0; i < remainingBoxes.length; i++) {
        const box1 = remainingBoxes[i];
        let fitsInAll = true;
  
        for (let j = 0; j < remainingBoxes.length; j++) {
          if (i !== j) {
            const box2 = remainingBoxes[j];
            if (!fits(box1, box2)) {
              fitsInAll = false;
              break;
            }
          }
        }
  
        if (fitsInAll) {
          const newRemainingBoxes = remainingBoxes.filter((box, index) => index !== i);
          const newFittedBoxes = [...fittedBoxes, box1];
          if (fitBoxes(newRemainingBoxes, newFittedBoxes)) {
            return true;
          }
        }
      }
  
      return false;
    }
  
    // Call the recursive function with the initial list of boxes
    return fitBoxes(boxes, []);
  }

  const boxes1 = [
    { l: 1, w: 1, h: 1 },
    { l: 2, w: 2, h: 2 }
  ];
  console.log(fitsInOneBox(boxes1)); // true
  
  const boxes2 = [
    { l: 1, w: 1, h: 1 },
    { l: 2, w: 2, h: 2 },
    { l: 3, w: 1, h: 3 }
  ];
  console.log(fitsInOneBox(boxes2)); // false
  
  const boxes3 = [
    { l: 1, w: 1, h: 1 },
    { l: 3, w: 3, h: 3 },
    { l: 2, w: 2, h: 2 }
  ];
  console.log(fitsInOneBox(boxes3)); // true
  