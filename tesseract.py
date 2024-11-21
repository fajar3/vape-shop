from PIL import Image
import pytesseract
import matplotlib.pyplot as plt

image = Image.open('./img1.jpeg')
text = pytesseract.image_to_string(image)

plt.imshow(image)

print("hasil ocr: ")
print(text)