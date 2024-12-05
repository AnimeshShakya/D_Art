"use client"

import { GalleryItem } from "@/components/gallery-item"

const galleryItems = [
  {
    id: 1,
    title: "Line Pattern Zipper Sweatshirt",
    price: 200,
    imageUrl: "/ebay/sweatshirt1.jpg",
    isNew: true
  },
  {
    id: 2,
    title: "Black Fantasy Sweatshirt",
    price: 200,
    imageUrl: "/ebay/sweatshirt2.jpg"
  },
  {
    id: 3,
    title: "Brooklyn-NYC Sweatshirt",
    price: 200,
    imageUrl: "/ebay/sweatshirt3.jpg",
    isNew: true
  },
  {
    id: 4,
    title: "Basic Plain Shirt",
    price: 200,
    imageUrl: "/ebay/sweatshirt4.jpg"
  },
  {
    id: 5,
    title: "Basic Orange Sweatshirt",
    price: 200,
    imageUrl: "/ebay/sweatshirt5.jpg",
    isNew: true
  },
  {
    id: 6,
    title: "Afai Sweatshirt X Atelier G",
    price: 200,
    imageUrl: "/ebay/sweatshirt6.jpg"
  },
  {
    id: 7,
    title: "Flowers Printed Sweatshirt",
    price: 200,
    imageUrl: "/ebay/sweatshirt7.jpg"
  },
  {
    id: 8,
    title: "Relaxed Fit Printed Sweatshirt",
    price: 200,
    imageUrl: "/ebay/sweatshirt8.jpg",
    isNew: true
  },
  {
    id: 9,
    title: "Letter Pattern Knitted Vest",
    price: 200,
    imageUrl: "/ebay/sweatshirt9.jpg"
  }
]

export default function GalleryPage() {
  return (
    <div className="bg-gradient-to-br from-black via-purple-900/10 to-blue-900/10 min-h-screen">
      <div className="container mx-auto px-6 py-24">
        <div className="space-y-8">
          <div className="text-center space-y-4">
            <h1 className="text-4xl font-bold text-white">Art Gallery</h1>
            <p className="text-gray-300 max-w-2xl mx-auto">
              Explore our collection of unique artworks. Each piece is carefully curated to bring you the best in contemporary art.
            </p>
          </div>

          {/* Filter bar */}
          <div className="flex items-center justify-between py-4 px-6 bg-gradient-to-r from-purple-900/20 to-blue-900/20 rounded-lg">
            <div className="flex items-center space-x-4">
              <span className="text-white">9 items</span>
            </div>
            <div className="flex items-center space-x-4">
              <select className="bg-transparent text-white border border-white/20 rounded-md px-3 py-1">
                <option value="newest">Newest</option>
                <option value="price-low">Price: Low to High</option>
                <option value="price-high">Price: High to Low</option>
              </select>
            </div>
          </div>

          {/* Gallery grid */}
          <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            {galleryItems.map((item) => (
              <GalleryItem
                key={item.id}
                title={item.title}
                price={item.price}
                imageUrl={item.imageUrl}
                isNew={item.isNew}
              />
            ))}
          </div>

          {/* Pagination */}
          <div className="flex justify-center space-x-2 pt-8">
            {[1, 2, 3].map((page) => (
              <button
                key={page}
                className={`px-4 py-2 rounded-md ${
                  page === 1
                    ? "bg-gradient-to-r from-purple-900 to-blue-900 text-white"
                    : "bg-white/10 text-white hover:bg-white/20"
                }`}
              >
                {page}
              </button>
            ))}
          </div>
        </div>
      </div>
    </div>
  )
}
